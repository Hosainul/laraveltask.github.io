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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboard/clients/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'show'])->name('dashboard.show');
    Route::delete('clients/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'destroy'])->name('client.destroy');
    Route::get('subscriber',[App\Http\Controllers\Admin\DashboardController::class, 'subscriber'])->name('subscriber');
    Route::get('clients',[App\Http\Controllers\Admin\DashboardController::class, 'clients'])->name('clients');
});



Route::post('/', [App\Http\Controllers\ClientController::class, 'addclient'])->name('client.add');
