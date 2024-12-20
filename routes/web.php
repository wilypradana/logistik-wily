<?php

use App\Http\Controllers\IncomingController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\OutboundController;
use App\Http\Controllers\StockController;
use App\Models\Incoming;
use App\Models\Outbound;
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

Route::redirect('/', '/dashboard');
Route::post('/set-modal-cookie', [ModalController::class, 'setModalCookie'])->name('set.modal.cookie');
// Dashboard
Route::get('/dashboard', function () {

    $type_menu = "dashboard";
    $incomings = Incoming::all()->take(10);
    $outbounds = Outbound::all()->take(10);

    return view('pages.dashboard-general-dashboard', compact("type_menu", "incomings", "outbounds"));
})->name("dashboard");


Route::prefix('/incoming')->group(function () {
    route::get('/', [IncomingController::class, 'incomings'])->name("show-incomings");
    route::get('/tambah', [IncomingController::class, 'tambah'])->name("tambah-incomings");

    route::delete('/delete/', [IncomingController::class, 'deleteIncomings'])->name("delete-incoming");

    route::post('/tambah', [IncomingController::class, 'storeIncoming'])->name("store-incomings");

})->name("incomings");


Route::prefix('/outbound')->group(function () {
    route::get('/', [OutboundController::class, 'outbounds'])->name("show-outbound");
    route::get('/tambah', [OutboundController::class, 'tambah'])->name("tambah-outbound");


    route::delete('/delete/', [OutboundController::class, 'deleteOutbounds'])->name("delete-outbound");
  
    route::post('/tambah', [OutboundController::class, 'storeOutbound'])->name("store-outbound");

})->name("outbounds");

Route::prefix('/stocks')->group(function () {
    route::get('/', [StockController::class, 'stocks'])->name("show-stocks");

})->name("stocks");