<?php

namespace App\Http\Controllers;

use App\Models\Actionlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrendpostController extends Controller
{
    public function trendpost() {
        $action= Actionlog::select('actionlogs.*','posts.*',DB::raw('COUNT(actionlogs.post_id) as post_count'))
                ->leftJoin('posts','posts.id','actionlogs.post_id')
                ->groupBy('actionlogs.post_id')
                ->get();

        return view('admin.trend_post.index',compact('action'));
    }
}
