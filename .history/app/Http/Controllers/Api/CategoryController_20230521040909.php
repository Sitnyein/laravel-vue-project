<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function allcategory() {
        $category= Category::get();
        return response()->json([
            'category' => $category
        ]);
    }

     //data search from vue api
     public function searchcategory(Request $req) {
        // $category =Category::select('posts.*')
        //          ->join('posts','categories.id','posts.category_id')
        //          ->where('title','like','%'.$req->key.'%')
        //          ->get();
        if($req->key == null) {
            $papa = Post::get();
        }else {
            $papa = Post::where('category_id',$req->key)->get();
        }
        return response()->json([
            'search' => $papa
        ]);
    }

}
