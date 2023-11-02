<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Route::post('/login', 'AuthController@login');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home ');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login'); 
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
Route::get('/register',[AuthManager::class, 'register'])->name('register');
Route::get('/logout',[AuthManager::class, 'logout'])->name('logout');
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('', [AuthManager::class,''])->name->name('logout');