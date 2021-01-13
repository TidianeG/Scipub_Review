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


Route::get('/', function () {
    return view('home');
});
Route::get('/about', "HomeController@about");
Route::get('/services', "HomeController@services");
Route::get('/Why_Choose_Us', "HomeController@Why_Choose_Us");
Route::get('/FAQS', "HomeController@FAQS");
Route::get('/pricing', "HomeController@pricing");
Route::get('/Contact_Us', "HomeController@Contact_Us");
Route::get('/portfolio', "HomeController@portfolio");
//Route::get('/dashbord', "HomeController@dashbord");
//Route::get('/new_message', "HomeController@new_message");
Route::get('/testimonials', "HomeController@testimonials");
//Route::get('/show_message/{id}', "HomeController@show_message")->name('show_message');
Route::post('/Contact_Us', "HomeController@CreateForm")->name('contact.store');
