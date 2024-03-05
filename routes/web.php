<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shipper\shipperController;
use App\Http\Controllers\carrier\carrierController;
use App\Http\Controllers\auxiliary\auxiliaryController;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\user\userController;

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

//Route::get('/',function(){
//    return redirect()->route('auth.home');
//})->name('home');

//Auth user and authenticate
Route::get('/', [authController::class,'getFormLogin'])->name('getFormLogin');
Route::get('/accueil', [authController::class,'getHome'])->name('getHome');
Route::prefix('utilisateur/')->name('auth.')->group(function () {
    Route::post('connexion', [authController::class, 'login'])->name('login');
    Route::get('', [authController::class,'home'])->name('home');
    Route::get('ajouter', [authController::class, 'getForm'])->name('getForm');
    Route::get('modifier/{id}', [authController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::get('detail/{id}', [authController::class,'getDetail'])->name('getDetail');
    Route::post('ajouter-utilisateur', [authController::class, 'storeUser'])->name('storeUser');
    Route::post('modifier-utilisateur', [authController::class, 'updateUser'])->name('updateUser');
    Route::get('detail', [authController::class,'view'])->name('view');
    Route::get('supprimer-utilisateur/{id}', [authController::class,'deleteUser'])->name('deleteUser');
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
    Route::get('modifier/{id}', [carrierController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::get('detail/{id}', [carrierController::class,'getDetail'])->name('getDetail');
    Route::post('ajouter-transporteur', [carrierController::class,'storeCarrier'])->name('storeCarrier');
    Route::post('modifier-transporteur', [carrierController::class,'updateCarrier'])->name('updateCarrier');
    Route::get('detail', [carrierController::class,'view'])->name('view');
    Route::get('supprimer-transporteur/{id}', [carrierController::class,'deleteCarrier'])->name('deleteCarrier');
});

//Route auxiliary
Route::prefix('auxiliaire/')->name('auxiliary.')->group(function () {
    Route::get('', [auxiliaryController::class,'index'])->name('home');
    Route::get('ajouter', [auxiliaryController::class,'getForm'])->name('getForm');
    Route::get('modifier/{id}', [auxiliaryController::class,'getFormUpdate'])->name('getFormUpdate');
    Route::get('detail/{id}', [auxiliaryController::class,'getDetail'])->name('getDetail');
    Route::post('ajouter-auxiliaire', [auxiliaryController::class,'storeAuxiliary'])->name('storeAuxiliary');
    Route::post('modifier-auxiliaire', [auxiliaryController::class,'updateAuxiliary'])->name('updateAuxiliary');
    Route::get('detail', [auxiliaryController::class,'view'])->name('view');
    Route::get('supprimer-auxiliaire/{id}', [auxiliaryController::class,'deleteAuxiliary'])->name('deleteAuxiliary');
});

