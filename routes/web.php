<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shipper\shipperController;
use App\Http\Controllers\carrier\carrierController;
use App\Http\Controllers\auxiliary\auxiliaryController;
use App\Http\Controllers\auth\authController;
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

//Auth user
Route::get('/login', [authController::class,'login'])->name('login');
Route::prefix('utilisateur/')->name('user.')->group(function () {
    Route::post('connexion', [authController::class, 'login'])->name('login');
    Route::get('ajouter', [authController::class, 'getForm'])->name('getForm');
    Route::get('modifier/{id}', [authController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::post('/ajouter-utilisateur', [authController::class, 'storeUser'])->name('storeUser');
    Route::post('modifier-utilisateur', [authController::class, 'updateUser'])->name('updateUser');
    Route::get('', [authController::class, 'home'])->name('home');
});
//End auth user

//Route shipper
Route::prefix('chargeur/')->name('shipper.')->group(function () {
    Route::get('', [shipperController::class,'home'])->name('home');
    Route::get('ajouter', [shipperController::class,'getForm'])->name('getForm');
    Route::get('modifier/{id}', [shipperController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::get('detail/{id}', [shipperController::class,'getDetail'])->name('getDetail');
    Route::get('liste', [shipperController::class,'getShipper'])->name('getShipper');
    Route::get('produit', [shipperController::class,'getProduit'])->name('getProduit');
    Route::post('ajouter-chargeur', [shipperController::class,'storeShipper'])->name('storeShipper');
    Route::post('modifier-chargeur', [shipperController::class,'updateShipper'])->name('updateShipper');
    Route::get('supprimer-chargeur/{id}', [shipperController::class,'deleteShipper'])->name('deleteShipper');
});

//Route carrier
Route::prefix('transporteur/')->name('carrier.')->group(function () {
    Route::get('', [carrierController::class,'index'])->name('home');
    Route::get('ajouter', [carrierController::class,'getForm'])->name('getForm');
    Route::post('ajouter-transporteur', [carrierController::class,'storeCarrier'])->name('storeCarrier');
    Route::get('modifier/{id}', [carrierController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::get('detail/{id}', [shipperController::class,'getDetail'])->name('getDetail');
    Route::post('ajouter-chargeur', [shipperController::class,'storeShipper'])->name('storeShipper');
    Route::post('modifier-chargeur', [shipperController::class,'updateShipper'])->name('updateShipper');
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
