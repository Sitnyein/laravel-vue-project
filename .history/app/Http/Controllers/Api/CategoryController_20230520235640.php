<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allcategory() {
        $category= Category::get();
        return response()->json([
            'category' => $category
        ]);
    }
}
