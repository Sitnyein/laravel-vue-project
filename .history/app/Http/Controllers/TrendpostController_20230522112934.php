<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrendpostController extends Controller
{
    public function trendpost() {
        return view('admin.trend_post.index');
    }
}
