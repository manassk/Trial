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
    return view('welcome');
});
Route::get('/home', function () {
    return "welcome home";
});
Route::get('/about',function(){
    return "This is an about page"; 
});
Route::get('/user/{id}', function($id="kumari"){
    return "welcome ".$id;
});
Route::redirect('/homie','/home',301); 
