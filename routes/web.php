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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() { return view('pages.home');});
Route::get('/about', function() { return view('pages.about');});
Route::get('/product', function() { return view('pages.products');});
Route::get('/contact', function() { return view('pages.contact');});

Route::get('/create-product', function() { return view('pages.create-product'); }); // Add this line
