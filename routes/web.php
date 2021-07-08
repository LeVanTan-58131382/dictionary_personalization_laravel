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

// Chỉ có role là super-admin mới có thể truy cập vào các route của group này
// Route::group(['middleware' => ['role:super-admin']], function () {
//     //
//     //dd("Chào bạn, Super Admin của chúng tôi !!! ");
// });

// // Chỉ có permission là publish articles thì mới có thể truy cập vào các route của group  này
// Route::group(['middleware' => ['permission:publish articles']], function () {
//     //
//     //dd("Chào bạn, người sẽ đăng các bài báo của chúng tôi !!!");
// });
