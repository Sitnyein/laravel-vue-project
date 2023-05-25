<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile() {
        $id = Auth::user()->id;
      $user = User::where('id',$id)->first();

      return view('admin.profile.index',compact('user'));
    }
     //update admin account
    public function  adminupdate(Request $req) {


        $this->accValidation($req);
        $id = Auth::user()->id;
        $updateacc = $this->update($req);


       User::where('id',$id)->update($updateacc);
       return back()->with(['success' => 'Account update success']);
    }

    //change password page
    public function passwordpage() {
        return view('admin.profile.changepw');
    }

      //change password
      public function Changepassword(Request $req) {
        $this->passwordcheck($req);
        $user = User::select('password')->where('id',Auth::user()->id)->first();
        $dbPassword = $user->password;
       //  dd(Hash::make('sithu')); //password hash create
          if(Hash::check($req->current, $dbPassword)) {
             $data=[
               'password' => Hash::make($req->new)
             ];
            User::where('id',Auth::user()->id)->update($data);
        //  return redirect()->route('login#Page'); }
         return back()->with(['success' => 'password change sucess']); } else {
      return back()->with(['notMatch' => 'The old password not match.Try again!']); }  }






















    private function accValidation($request) {
        $acc = [
           'adminname' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'email' => 'required',
           'gender' => 'required'
        ];
       Validator::make($request->all(),$acc)->validate();

      }



      //update acc info format change
        private function update($request) {
           // dd($request->all())->toArray();
           $account = [
               'name' => $request->adminname,
               'email' =>$request->email,
               'phone' => $request->phone,
               'address' =>$request->address,
               'gender' => $request->gender
           ];
           return $account;
        }



      //password validation checkup
      private function passwordcheck($request) {
        $validate = [
            'current' => 'required|min:5|max:15',
             'new'  => 'required|min:5|max:15',
             'comfrim' => 'required|min:5|max:15|same:new'
        ];

        Validator::make($request->all(),$validate
        )->validate();

     }
}
