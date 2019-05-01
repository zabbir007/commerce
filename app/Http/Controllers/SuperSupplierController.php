<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;
use DB;
use Session;
use Mail;
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
class SuperSupplierController extends Controller
{
    public function __construct()
    {
         
        $this->middleware('checkSupplier');
    }
    //open dashboard
    public function supplierDashboard(){
    	return view('supplier.dashboard');
    }
    //logout
    public function supplierLogout()
    {
       
        Session::put('supplierId','');
        
        return redirect()->route('showSupplierLoginPage');
    }
    //show add product page
    public function addProduct(){
        return view('supplier.addProduct');
    }
    //save product
    public function saveProduct(SupplierRequest $request)
    {

        $supplierId = Session::get('supplierId');
        $data=array();
        $data['productName']=$request->productName;
        $data['userId']=$supplierId;
        $data['productDescription']=$request->productDescription;
        $image=$request->file('productImage');
        $image_name=str_random(20);
        $ext=strtolower($image->getClientOriginalExtension());

        $permited  = array('jpg', 'jpeg', 'png', 'pdf');
        $fileSize = $request->file('productImage')->getClientSize();

        if($fileSize>524288){
             Session::put('messageWarning','Please upload file less than 512 KB');
              return redirect()->back();
        }elseif (in_array($ext, $permited) === false){

            Session::put('messageWarning','You can only upload '.implode(', ', $permited));
              return redirect()->back();
        }

        $image_full_name=$image_name.'.'.$ext;
        $upload_path='admin/img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['productImage']=$image_url;
        $insertProduct=DB::table('products')
                           ->insert($data);
        if ($insertProduct) {
            Session::put('message','Product Insert successfully!!');
            return redirect()->back();
        }else{
            
            Session::put('message','Product Insert Failed!!');
            return redirect()->back();
        }
    }
   //show product
    public function showProduct()
       {
            $supplierId = Session::get('supplierId');
            $productInfo = DB::table('products as pro')
                            ->where('pro.userId',$supplierId)
                            ->orderBy('pro.id', 'DESC')
                            ->paginate(2);
            return view('supplier.showProduct', compact('productInfo'));
       }
    //edit Product
       public function editProduct($id,$page)
        {
            
             $singleProductInfo = DB::table('products')
                                    ->Where('id', $id)
                                    ->first();           
             return view('supplier.editProduct',compact('singleProductInfo','page'));
            
        }
    //update product
       public function updateProduct(Request $request)
       {

           $page=$request->page;
           $id = $request->id;
           $productInfo = DB::table('products')
                              ->where('id', $id)
                              ->first();
            $data=array();
            if($request->productName !=null){
                $data['productName']=$request->productName;
            }else{
                $data['productName']=$productInfo->productName;
                
            }
            if($request->productDescription !=null){
                $data['productDescription']=$request->productDescription;
            }else{
                $data['productDescription']=$productInfo->productDescription;
                
            }
            if($request->productImage !=null){
                $image=$request->file('productImage');
                $image_name=str_random(20);
                $ext=strtolower($image->getClientOriginalExtension());

                $permited  = array('jpg', 'jpeg', 'png', 'pdf');
                $fileSize = $request->file('productImage')->getClientSize();

                if($fileSize>524288){
                     Session::put('messageWarning','Please upload file less than 512 KB');
                      return redirect()->back();
                }elseif (in_array($ext, $permited) === false){

                    Session::put('messageWarning','You can only upload '.implode(', ', $permited));
                      return redirect()->back();
                }

                $image_full_name=$image_name.'.'.$ext;
                $upload_path='admin/img/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['productImage']=$image_url;
            }else{
                $data['productImage']=$productInfo->productImage;
                
            }
            
            $updateProduct=DB::table('products')
                               ->where('id', $id)
                               ->update($data);
            if ($updateProduct) {
                 Session::put('message','Update successfully!!');
                 return redirect('supplier/show-product?page='.$page);
            }else{
                
                Session::put('message','Update successfully!!');
                 return redirect('supplier/show-product?page='.$page);
            }
        }
    //Delete Product
        public function deleteProduct(Request $request){
          $id=intval($request->id);
          DB::table('products')
              ->where('id',$id)
              ->delete();
        }

    //search product
        public function searchProduct(Request $request){

        $search=$request->searchText;
        $productInfo=DB::table('products as pro')
                    ->Where('pro.productName', 'like', '%' .$search. '%')
                    ->orWhere('pro.productDescription', 'like', '%' .$search. '%')
                    ->select('pro.*')
                    ->orderBy('pro.productName','ASC')
                    ->limit(10)
                    ->get();
         
         
        echo json_encode($productInfo);
       
    }

}
