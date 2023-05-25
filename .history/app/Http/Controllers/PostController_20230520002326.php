<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function postpage() {
        $category = Category::get();
        $post=Post::get();
        return view('admin.post.index',compact('category','post'));
    }

    public function postcreate(Request $req) {
        $this->postcheck($req);
        $data = $this->postcreatecheck($req);
        if($req->hasFile('image')) {
            $fileName = uniqid() . $req->file('image')->getClientOriginalName();
            $req->file('image')->storeAs('public',$fileName);
            $data['image'] = $fileName;
              }
            Post::create($data);
            return redirect()->route('post#page');

           }

        public function postdelete($id) {
            //old image name | check => delete | store
             $dbimage = Post::where('id',$id)->first();
             $dbimage = $dbimage->image;
              if($dbimage != null) {
                Storage::delete('public/'.$dbimage);
            Post::where('id',$id)->delete();
            return redirect()->route('post#page');
        } }

        //post edit
        public function postedit($id) {
          $category= Category::get();
          $postdetail = Post::where('id',$id)->first();
          $post=Post::get();

          return view('admin.post.edit',compact('category','postdetail','post'));
        }
        //post update
        public function postupdate($id,Request $req) {
          $this->postcheck($req);

         $updatedata =  $this->postcreatecheck($req);
         dd($updatedata);

        }


    private function postcreatecheck($request) {
           return [
              'title' => $request->name,
            'category_id' => $request->category,
             'description' => $request->description,

            ];
    }



    private function postcheck($request) {
        $validate = [
          'name' => 'required',
          'description' => 'required',
           'category' => 'required'
        ];

        Validator::make($request->all(),$validate
        )->validate(); }

}
