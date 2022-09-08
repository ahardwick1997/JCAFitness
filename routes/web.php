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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('online-courses', function () {
    return view('online-courses');
});

Route::get('rehabilitation', function () {
    return view('rehabilitation');
});

Route::get('workouts', function () {
    return view('workouts');
});

Route::get('nutrition', function () {
    return view('nutrition');
});

Route::get('personal-training', function () {
    return view('personal-training');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('members', function () {
    return view('members');
});