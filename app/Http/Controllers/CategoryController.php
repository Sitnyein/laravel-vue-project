<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category() {
        $category = Category::get();
        return view('admin.category.index',compact('category'));
    }
 //category create
    public function categorycreate(Request $req) {
      $this->categorycheck($req);

        $data=[
            'title' => $req->name,
            'description' => $req->description
        ];
        Category::create($data);
        return back();

    }
    //category delete
    public function categorydelete($id) {
     Category::where('id',$id)->delete();
     return back(); }

    //category edit page
     public function categoryedit($id) {
        $editcategory = Category::where('id',$id)->first();
        $category = Category::get();
        return view('admin.category.edit',compact('editcategory','category'));
     }

    //category update
    public function categoryupdate($id,Request $req) {
        $this->categorycheck($req);

        $data=[
            'title' => $req->name,
            'description' => $req->description
        ];
        Category::where('id',$id)->update($data);
        return redirect()->route('category#page');
    }

    //category search
    public function categorysearch() {
        $category =Category::when(request('key'),function($query){
            $query->where('title','like','%'.request('key').'%');
        })->get();
        // $user->appends(request()->all());
        return view('admin.category.index',compact('category'));
      }

     //private validation checkup
     private function categorycheck($request) {
        $validate = [
          'name' => 'required',
          'description' => 'required'
        ];

        Validator::make($request->all(),$validate
        )->validate(); }

















}
