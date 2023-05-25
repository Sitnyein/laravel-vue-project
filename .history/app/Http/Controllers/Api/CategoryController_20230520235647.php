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
}