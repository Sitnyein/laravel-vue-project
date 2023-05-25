<?php

namespace App\Http\Controllers;

use App\Models\Actionlog;
use Illuminate\Http\Request;

class ActionlogController extends Controller
{
    public function action(Request $req) {
        $actionlog = [
            'user_id' => $req->user_id,
            'post_id' => $req->post_id
        ];
        Actionlog::create($actionlog);
        $data = Actionlog::where('post_id',$req->post_id)->get();
     return response()->json([
        'mess' => $data
     ]);



    }
}
