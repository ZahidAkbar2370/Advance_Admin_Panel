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
    return view('Admin/admin_layout');
});

Route::get('add-form', function () {
    return view('Admin/Form/add_form');
});

Route::get('view-form', function () {
    return view('Admin/Form/view_form');
});
