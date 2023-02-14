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
    $posts = Post::all()->load(["category", "author"]);
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

    return view("back.index", compact("users", "categories"));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function store(Request $request)
  {

    $validator  = Validator::make($request->all(), [
      "title" => "required|unique:posts",
      "summary" => "required",
      "content" => "required",
      "status" => "required",
      "photo" => "required",
      "category" => "required",
      "author" => "required",

    ]);
    if ($validator->fails()) {
      return response()->json($validator->errors(), 400);
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


  public function edit($id)
  {
    $post = Post::where("id", $id)->first();
    return response()->json([
      'success' => true,
      'post' => $post
    ]);
  }


  public function update(Request $request, $id)
  {
    $validator = Validator::make($request->all(), [
      "title" => "required|unique:posts",
      "summary" => "required",
      "content" => "required",
      "status" => "required",
      "photo" => "required",
      "category" => "required",
      "author" => "required",
    ]);
    if ($validator->fails()) {
      return response()->json($validator->errors(), 400);
    }
    $post = Post::findOrFail($id);

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

    }
    $post->photos = $arr;
    $post->save();
    return response()->json([
      'success' => true,
      'message' => 'Success Updated post',
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $url = "photos/posts/" . $post->title . "/*";

    foreach (glob($url) as  $file) {
      unlink($file);
    }
    $post->delete();
    return response()->json([
      'success' => true,
      'message' => 'Success Deleted post',
    ]);
  }
}
