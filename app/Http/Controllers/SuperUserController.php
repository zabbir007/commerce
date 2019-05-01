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
class SuperUserController extends Controller
{
    public function __construct()
    {
         
        $this->middleware('checkUser');
    }
    //open dashboard
    public function userDashboard(){
    	return view('user.dashboard');
    }
    //logout
    public function userLogout()
    {
       
        Session::put('userId','');
        
        return redirect()->route('showUserLoginPage');
    }
    //show product
    public function showAllProduct()
       {
            $supplierId = Session::get('supplierId');
            $productInfo = DB::table('products as pro')
                                ->join('suppliers as sup', 'sup.id','=','pro.userId')
                                ->orderBy('pro.id', 'DESC')
                                ->paginate(2);
            return view('user.showAllProduct', compact('productInfo'));
       }
 
       //search product
        public function searchAllProduct(Request $request){

        $search=$request->searchText;
        $productInfo=DB::table('products as pro')
                        ->join('suppliers as sup', 'sup.id','=','pro.userId')
                        ->Where('pro.productName', 'like', '%' .$search. '%')
                        ->orWhere('pro.productDescription', 'like', '%' .$search. '%')
                        ->orWhere('sup.email', 'like', '%' .$search. '%')
                        ->select('pro.*','sup.email')
                        ->orderBy('pro.productName','ASC')
                        ->limit(10)
                        ->get();
         
         
        echo json_encode($productInfo);

       
    }

    
}
