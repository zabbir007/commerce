<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Mail;
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLoginUser');
    }

    //show login page

    public function showUserLoginPage(){
    	return view('user.login');
    }

    //login 
    public function userSignIn(Request $request)
    {
    	$email=$request->email;
    	$password=md5($request->password);
    	
        

    	$result = DB::table('users')
    				->where('email', $email)
    				->where('password', $password)
    				->first();
    				if ($result) {
    					Session::put('userId',$result->id);
    					return redirect()->route('userDashboard');
    				}else{
    					Session::put('message','Email or Password Invalid');
    					return redirect()->route('userSignIn');
    				}

       
    }
}
