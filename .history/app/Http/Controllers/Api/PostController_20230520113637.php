<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allpost() {
        $post = Post::get();
        return response()->json([
            'post' => $post
        ]);
    }
}
