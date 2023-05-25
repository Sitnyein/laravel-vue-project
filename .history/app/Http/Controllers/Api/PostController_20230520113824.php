<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
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
}
