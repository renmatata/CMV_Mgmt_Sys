<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ReservationsController;
use App\Http\Controllers\Admin\EntrancefeeController;
use App\Http\Controllers\Admin\RestobarController;
use App\Http\Controllers\Admin\VenueController;

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

        //Display Reservations Page (CRUD - Read)
        Route::get('reservations', [ReservationsController::class, 'index'])->name('admin.pages.reservations');
        Route::get('create-reservations', [ReservationsController::class, 'edit'])->name('admin.pages.create-reservations');
        Route::match(['get','post'], 'create-reservations', 'ReservationsController@edit');

        Route::get('entrancefee', [EntrancefeeController::class, 'index'])->name('admin.pages.entrancefee');
        Route::get('add-entrancefee-income', [EntrancefeeController::class, 'create'])->name('admin.pages.add-entrancefee-income');
        Route::post('admin/entrancefee', 'EntrancefeeController@store')->name('admin.entrancefee.store');

        Route::get('restobar', [RestobarController::class, 'index'])->name('admin.pages.restobar');
        Route::get('add-restobar-income', [RestobarController::class, 'create'])->name('admin.pages.add-restobar-income');
        Route::post('admin/restobar', 'RestobarController@store')->name('admin.restobar.store');

        Route::get('venue', [VenueController::class, 'index'])->name('admin.pages.venue');
        Route::get('add-venue-income', [VenueController::class, 'create'])->name('admin.pages.add-venue-income');
        Route::post('admin/venue', 'VenueController@store')->name('admin.venue.store');

    });
});
