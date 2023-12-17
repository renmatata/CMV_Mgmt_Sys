<?php

use App\Http\Controllers\Admin\AdminController;
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

// Auth::routes();

// Registration routes

// Route::get('/register', [AuthManager::class, 'register'])->name('register');
// Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/reservation', [App\Http\Controllers\HomeController::class, 'showReservation'])->name('reservation');

// Route::get('/register', [AuthManager::class, 'register'])->name('register');
// Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
// Route::get('/sidebar-menu', 'SidebarMenuController@getSidebarMenu');


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    Route::group(['middleware' =>['admin']], function(){
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout', 'AdminController@logout');

    });

    // Route::get('/login', [AuthManager::class, 'login'])->name('login');
    // Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
});
