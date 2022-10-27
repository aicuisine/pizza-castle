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

Route::view('/', 'public/homepage');
Route::view('/about', 'public/about');
Route::view('/blog', 'public/blog');
Route::view('/contact', 'public/contact');
Route::view('/menu', 'public/menu');