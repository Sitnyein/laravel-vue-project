<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function allpost() {
        $post = Post::get();
        return response()->json([
            'post' => $post
        ]);
    }
  //data search from vue api
    public function search(Request $req) {
        $category =Category::where('title','like','%'.$req->key.'%')->get();
        return response()->json([
            'searchdata' => $category
        ]);
    }

}
