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
    $name = 'Tamara';
    $age = 25;
    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', function () {
    $cars = DB::table('cars')->get();
    return view('cars', ['cars' => $cars]);
});