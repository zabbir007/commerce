<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*User Panel Start Here*/

Route::prefix('user')->group(function () {

 Route::get('show-user-login-page', 'UserController@showUserLoginPage')->name('showUserLoginPage');
 Route::get('user-logout', 'SuperUserController@userLogout')->name('userLogout');
 Route::get('user-dashboard', 'SuperUserController@userDashboard')->name('userDashboard');
 Route::post('user-signin', 'UserController@userSignIn')->name('userSignIn');

 //show all product
 Route::get('show-all-product', 'SuperUserController@showAllProduct')->name('showAllProduct');
 Route::post('search-all-product', 'SuperUserController@searchAllProduct')->name('searchAllProduct');
 Route::post('delete-all-product', 'SuperUserController@deleteAllProduct')->name('deleteAllProduct');
 

});

/*User Panel End Here*/



/*Supplier Panel Start Here*/

Route::prefix('supplier')->group(function () {

 Route::get('show-supplier-login-page', 'SupplierController@showSupplierLoginPage')->name('showSupplierLoginPage');
 Route::get('supplier-logout', 'SuperSupplierController@supplierLogout')->name('supplierLogout');
 Route::get('supplier-dashboard', 'SuperSupplierController@supplierDashboard')->name('supplierDashboard');
 Route::post('supplier-signin', 'SupplierController@supplierSignIn')->name('supplierSignIn');
//product module 
 Route::get('add-product', 'SuperSupplierController@addProduct')->name('addProduct');
 Route::post('save-product', 'SuperSupplierController@saveProduct')->name('saveProduct');
 Route::get('show-product', 'SuperSupplierController@showProduct')->name('showProduct');
 Route::get('edit-product/{id}/{page}', 'SuperSupplierController@editProduct')->name('editProduct');
 Route::post('update-product', 'SuperSupplierController@updateProduct')->name('updateProduct');
 Route::post('search-product', 'SuperSupplierController@searchProduct')->name('searchProduct');
 Route::post('delete-product', 'SuperSupplierController@deleteProduct')->name('deleteProduct');



});

/*Supplier Panel End Here*/
