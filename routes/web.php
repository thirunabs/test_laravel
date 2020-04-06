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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', function () {
//    return view('page.home',['name' => 'Test laravel project','disp'=>'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.']);
//});



/*

Route::get('/contact', function () {
    return view('page.contact');
});


Route::get('/abouts', function () {
    return view('page.abouts');
});*/
Route::get('/', 'pagecontroller@home');
Route::get('abouts', 'pagecontroller@abouts');
Route::get('contact', 'pagecontroller@contact');