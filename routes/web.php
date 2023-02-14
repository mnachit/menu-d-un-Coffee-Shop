<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coffeecontroller;
use App\Http\Controllers\loginController;

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

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/login', function () {
    return view('Auth.login');
});

Route::view('/index','index');

Route::post('/index1',[coffeecontroller::class,'add']);

Route::get('/index', [coffeecontroller::class,'show']);

Route::get('delete',[coffeecontroller::class,'delete'])->name('delete');

Route::get('/update-modal/{id}', [coffeecontroller::class,'edit']);

Route::get('/delete-modal/{id}', [coffeecontroller::class,'show_id']);

// Route::get('/home', [coffeecontroller::class,'show1']);

Route::put('/update-coffee', [coffeecontroller::class,'update']);

Route::get('/login', [loginController::class,'login'])->name('login');

Route::get('/logout',[loginController::class,'logout'])->name('logout');
