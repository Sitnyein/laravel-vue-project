<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionlogController extends Controller
{
    public function action(Request $req) {
        $actionlog = [
            'user_id' => $req->user_id,
            'post_id' => $req->post_id
        ];
        Actionlog::create($actionlog);




    }
}
