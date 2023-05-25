<?php

namespace App\Http\Controllers\Api;

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
     public function search(Request $req) {
        // $category =Category::select('posts.*')
        //          ->join('posts','categories.id','posts.category_id')
        //          ->where('title','like','%'.$req->key.'%')
        //          ->get();
           $category = $req->key;
        return response()->json([
            'search' => $category
        ]);
    }

}
