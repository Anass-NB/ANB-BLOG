<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{

  public function index(Request $request)
  {
    $posts = Post::all()->load(["category","author"]);
    $categories = Category::all();
    $users = User::all();

    if ($request->ajax()) {
      return response()->json([
        'success' => true,
        "posts" => $posts,
        // "categories" => $categories,
        // "users" => $users,
      ]);
    }

    return view("back.index",compact("users","categories"));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function store(StorePostRequest $request)
  {

    $validated = Validator::make($request->all());
    if($validated->fails()){
      return response()->json([
        "errors" => $validated->errors()->all(),
      ]);
    }
    $post = new Post();
    $post->title = $request->title;
    $post->slug = Str::slug($request->title);
    $post->summary = $request->summary;
    $post->status = $request->status;
    $post->content = $request->content;
    $post->category_id = $request->category;
    $post->user_id = $request->author;
    if ($request->hasFile("photo")) {
      $file_name = $request->file("photo")->getClientOriginalName();
      $request->file("photo")->storeAs("photos/posts/" . $request->title, $file_name, "upload_photos");
      $post->photo = $file_name;
    }
    $post->save();

    return response()->json([
      "success" => true,
      'message' => 'Success created post',
    ]);
  }





  public function update(StorePostRequest $request)
  {

    try {
      $request->validated();
      $post = Post::findOrFail($request->id);

      $post_photos = $post->photos;
      $post->title = $request->title;
      $post->slug = Str::slug($request->title);
      $post->summary = $request->summary;
      $post->status = $request->status;
      $post->content = $request->content;
      $post->category_id = $request->category;
      $post->user_id = $request->author;
      $post->photos = $request;

      $arr = array();
      return count($request->photos);

      if ($request->hasFile("photos")) {
        return "hasss";
        foreach ($request->file("photos") as $photo) {
          $file_name = $photo->getClientOriginalName();
          $photo->storeAs("photos/posts/" . $request->title, $file_name, "upload_photos");
          array_push($arr, $photo->getClientOriginalName());
        }
      } else {
        return "donnnt";
        //upload new photos
        $arr = $post_photos;
      }
      $post->photos = $arr;
      $post->save();
      notify()->success("Post updated with success", "update post");
      return redirect()->route("posts.index");
    } catch (\Exception $ex) {
      return redirect()->back()->withErrors(['error' => $ex->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
    try {
      $post = Post::findOrFail($request->id);
      $url = "photos/posts/" . $post->title . "/*";

      foreach (glob($url) as  $file) {
        unlink($file);
      }
      $post->delete();
      notify()->success("Post deleted with success", "delete post");
      return redirect()->route("posts.index");
    } catch (\Exception $ex) {
      return redirect()->back()->withErrors(['error' => $ex->getMessage()]);
    }
  }
}
