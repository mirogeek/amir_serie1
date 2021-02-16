<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
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



Route::get('/amir', function () {
    $var = 'rebbah le bg';
    return "<h2>{$var}</h2>";
});

Route::get('/welcome', function () {
    $var = 8;
    return view("welcome", compact("var"));
});

Route::get('/addition',function(){
    $var1 = 2;
    $var2 = 2;
    return view("addition", compact("var1","var2"));
});