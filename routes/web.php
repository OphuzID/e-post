<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about',[
        "name" => "Yoga Lesmana",
        "email" => "yogalesmana.id@gmail.com"
    ]);
});

Route::get('/blog',function(){
    return view('blog',[
        "name" => "Yoga Lesmana",
        "email" => "yogalesmana.id@gmail.com"
    ]);
});