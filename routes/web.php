<?php

use App\Http\Controllers\PostController;
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

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\Http\Controllers',
],function(){
    Route::get('login', 'LoginAdminController@formlogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    Route::get('daftar','RegisterController@form')->name('admin.register');
    Route::post('daftar','RegisterController@simpan');

    Route::middleware(['auth:admin'])->group(function(){
        Route::match(['get', 'post'],'logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::view('/', 'dashboard')->name('dashboard');
        Route::view('/post', 'data-post')->name('post')->middleware('can:role, "admin", "peminjam"');
        Route::view('/admin', 'data-admin')->name('admin')->middleware('can:role, "admin"');
    });

    Route::get('/posts', \App\Http\Controllers\PostController::class);
    // Route::get('user/tampil', [PostController::class, 'tampildata'])->name('tampildata')->middleware('auth');
    // Route::get('user/tambah', [PostController::class, 'tambahdata'])->name('tambahdata')->middleware('auth');
    // Route::post('user/simpan', [PostController::class, 'simpandata'])->name('simpandata')->middleware('auth');
});
