<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard.layouts.main');
// });

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin'); 
Route::get('admin', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.home')->middleware('is_admin'); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//controller-resource, user
Route::resource('/admin/user', App\Http\Controllers\UserController::class)->middleware('is_admin');

//untuk authentifikasi seperti login, regist, logout, reset pass
Auth::routes();

















// Route::get('/hello/{page?}', function ($page = 1) {
//     return '<h1>helloooo</h1>'. $page;
// });

// Route::get('hellocontroller/{id?}', [App\Http\Controllers\HelloController::class, 'index']);

// Route::get('guru',[App\Http\Controllers\GuruController::class,'index']);