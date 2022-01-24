<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials/*,['admin'=>0]*/)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }/*
        elseif (Auth::attempt($credentials,['admin'=>1])) {
            return redirect()->intended('administrator')
                        ->withSuccess('Signed in');
        }        
        */

  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            /*'city' => 'required',
            'country' => 'required',*/
        ]);
           
        $data = $request->all();
        $user= new User();
        $check = $user->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

   
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}