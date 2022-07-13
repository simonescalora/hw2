<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use app\Cart;

Route::get('/', function () {
    return view('login');
});
Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');
Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');
Route::get('logout', 'App\Http\Controllers\LoginController@logout');

//route home
Route::get('home','App\Http\Controllers\HomeController@index');
Route::get('/prodotti/{product}', 'ShopController@single');
Route::get('home/add/{p1}/{p2}/{p3}','App\Http\Controllers\HomeController@add');

//route profilo
Route::get('checkout','App\Http\Controllers\CartController@cart');
Route::get('checkout/delete/{p1}','App\Http\Controllers\CartController@delete');
Route::get('checkout/report','App\Http\Controllers\CartController@report');



