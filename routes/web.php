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

// Route::get('/admin', function () {
//     return view('admin/index', ['sidebar => admin']);
// });

// Route::view('/admin/new-user', 'admin/new-user');

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/new-user', function () {
    return view('admin/new-user');
});

Route::get('/catering', function () {
    return view('catering/index');
});

Route::get('/user', function () {
    return view('user/index');
});