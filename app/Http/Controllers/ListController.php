<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{  //show admin list ==== adminlist function
    // public function adminlist() {
    //     $user=User::get();
    //     return  view('admin.list.index',compact('user'));
    // }


  //delete acc from adminlist
  public function admindelete($id) {
    User::where('id',$id)->delete();
    return redirect()->route('admin#list');
  }

//admin list search
  public function adminlist() {
    $user =User::when(request('key'),function($query){
        $query->where('name','like','%'.request('key').'%');
    })->get();
    // $user->appends(request()->all());
    return view('admin.list.index',compact('user'));
  }








}

