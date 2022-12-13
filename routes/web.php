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
    $title = '';
    return view('layouts/main', [
        "title" => $title
    ]);
});

Route::get('/home', function(){
    return view('home', [
        "title" => "Page Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "Page About",
        "author" => "Hendri"
    ]);
});
