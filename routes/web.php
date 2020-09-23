<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','front\post@home');

Route::get('/post/{id}','front\post@post');

Route::get('/page/{id}','front\post@page');
Route::get('admin/login','Admin_auth@login');

Route::post('admin/login_submit','Admin_auth@login_submit');


Route::get('admin/logout','Admin_auth@logout');

Route::group(['middleware'=>['Admin_auth']],function(){

    Route::get('admin/post/list','Admin_auth@post_list');
    Route::get('admin/post/add','Admin_auth@post_add');
     Route::post('admin/post/submit','Admin_auth@add_submit');
    Route::get('admin/post/edit/{id}','Admin_auth@post_edit');
    Route::post('admin/post/update/{id}','Admin_auth@post_update');
    Route::get('admin/post/delete/{id}','Admin_auth@post_delete');
    
     Route::get('admin/page/list','Page_auth@page_list');
    Route::get('admin/page/add','Page_auth@page_add');
     Route::post('admin/page/submit','Page_auth@add_submit');
    Route::get('admin/page/edit/{id}','Page_auth@page_edit');
    Route::post('admin/page/update/{id}','Page_auth@page_update');
    Route::get('admin/page/delete/{id}','Page_auth@page_delete');

     Route::get('admin/contact/list','Contact_auth@contact_list');

    


});






