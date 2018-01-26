<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
   return view('user_reg');
});

Route::post('/user_insert','controller@user_insert');

Route::post('/user_login','loginController@login');

Route::get('/invoiceform',function(){
   return view('invoiceform');
});

Route::post('/invoiceform','invoice@form');

Route::post('/order_insert','order_controller@order_insert');

Route::get('/home',function(){
   return view('home');
});
Route::get('/fetch','FetchController@index');