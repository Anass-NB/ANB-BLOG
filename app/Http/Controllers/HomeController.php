<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::where("status", "1")->paginate(2);
        $categories = Category::all();
        return view("front.home")->with([

            "posts" => $posts,
            "categories" => $categories,
            "random_posts" => Post::inRandomOrder()->limit(3)->get(),
        ]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        $post = Post::where("slug", $slug)->first();
        // return $post->category->name;
        return view("front.post_details",compact("post"));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
