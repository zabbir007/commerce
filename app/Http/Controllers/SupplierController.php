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
class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLoginSupplier');
    }

    //show login page

    public function showSupplierLoginPage(){
    	return view('supplier.login');
    }

    //login 
    public function supplierSignIn(Request $request)
    {
    	$email=$request->email;
    	$password=md5($request->password);
    	
        

    	$result = DB::table('suppliers')
    				->where('email', $email)
    				->where('password', $password)
    				->first();
    	

    				if ($result) {
    					Session::put('supplierId',$result->id);
    					return redirect()->route('supplierDashboard');
    				}else{
    					Session::put('message','Email or Password Invalid');
    					return redirect()->route('supplierSignIn');
    				}

       
    }
}
