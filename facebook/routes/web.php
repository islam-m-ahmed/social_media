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

Route::get('/profile', function () {
    return view('profile.profile');
});


Route::get('/login',function(){
    return view('auth.login');

});
Route::get('/register',function(){
    return view('auth.register');

});
Route::get('/edit',function(){
    return view('profile.edit');

});
Route::get('/post',function(){
    return view('posts.addpost');

});

Route::get('/home',function(){
    return view('home');

});





