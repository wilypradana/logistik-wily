<?php

use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutboundController;
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

Route::redirect('/', '/dashboard-general-dashboard');

// Dashboard
Route::get('/dashboard-general-dashboard', function () {
    return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
});


Route::prefix('/incomings')->group(function () {
    route::get('/', [IncomingController::class, 'incomings'])->name("show-incomings");
    route::get('/tambah', [IncomingController::class, 'tambah'])->name("tambah-incomings");


    route::post('/tambah', [IncomingController::class, 'storeIncoming'])->name("store-incomings");

})->name("incomings");


Route::prefix('/outbounds')->group(function () {
    route::get('/', [OutboundController::class, 'outbounds'])->name("show-outbounds");
    route::get('/tambah', [OutboundController::class, 'tambah'])->name("tambah-outbounds");
  
    route::post('/tambah', [OutboundController::class, 'storeOutbound'])->name("store-outbounds");

})->name("outbounds");