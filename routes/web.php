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

//TOutes ses ecritures son valables

Route::get('', function () {
    return view('pages/home', ['name' => 'home']);
});

Route::view('/about-me', 'pages.about') -> name('about');

Route::get('/help', fn() => view('pages.help'), ['name' => 'help']);