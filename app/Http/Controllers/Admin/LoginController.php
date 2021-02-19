<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('admin.admin_login');
    }
     public function StoreLogin(LoginRequest $request){

             if($request->isMethod('POST')){
                 $data = $request->all();

                 //checkage for data request if compatible with DB we use [attempt] function
                 if(Auth::attempt(['email' => $data['email'],'password' => $data['pass']])  ){
                     //authentification correct

                     return redirect('/dashboard');
                 }else{
                     ////authentification failed return to login
                     Session::flash('error','Invalid Email Or Password');
                     return redirect()->back();

                 }

             }else{
                 return redirect()->back();
             }


     }
}
