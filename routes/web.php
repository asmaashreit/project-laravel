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
    return view('welcome');
});

Route::get('Add User', function () {
    return view('users.add');
});

// Route::get('Login', function () {
//     return view('users.login');
// });

Route::get('register','registController@registTitle');

Route::post('profile','registController@valid');

Route::get('displayStudents','studentController@display');

Route::resource('modelUser','userController');

Route::get('Login','userController@login');

Route::post('DoLogin','userController@doLogin');