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

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
	Route::get('/', function() {return view('admin.home'); });
   
});
Route::get('/admin/category/add',['as' => 'admin',function(){
	return view('Admin.category.add');
}]);
Route::get('/admin/category/edit',['as' => 'admin',function(){
	return view('Admin.category.edit');
}]);
Route::get('/admin/category/list',['as' => 'admin',function(){
	return view('Admin.category.list');
}]);
Route::get('/login',['as' => 'index','uses' => 'loginController@index']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@postlogin']);


