<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shipper\shipperController;
use App\Http\Controllers\carrier\carrierController;
use App\Http\Controllers\auxiliary\auxiliaryController;
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
    return view('home');
})->name('home');
//Route shipper
Route::prefix('chargeur/')->name('shipper.')->group(function () {
    Route::get('', [shipperController::class,'index'])->name('home');
    Route::get('form', [shipperController::class,'store'])->name('store');
    Route::get('detail', [shipperController::class,'view'])->name('view');
});

//Route carrier
Route::prefix('transporteur/')->name('carrier.')->group(function () {
    Route::get('', [carrierController::class,'index'])->name('home');
    Route::get('form', [carrierController::class,'store'])->name('store');
    Route::get('detail', [carrierController::class,'view'])->name('view');
});

//Route auxiliary
Route::prefix('auxiliaire/')->name('auxiliary.')->group(function () {
    Route::get('', [auxiliaryController::class,'index'])->name('home');
    Route::get('form', [auxiliaryController::class,'store'])->name('store');
    Route::get('detail', [auxiliaryController::class,'view'])->name('view');
})
;//Route auxiliary
Route::prefix('outils/')->name('tools.')->group(function () {
    Route::get('', [auxiliaryController::class,'index'])->name('home');
    Route::get('form', [auxiliaryController::class,'store'])->name('store');
    Route::get('detail', [auxiliaryController::class,'view'])->name('view');
});
