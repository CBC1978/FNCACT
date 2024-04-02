<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shipper\shipperController;
use App\Http\Controllers\carrier\carrierController;
use App\Http\Controllers\auxiliary\auxiliaryController;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\groupe\groupeController;

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
Route::get('/accueil', [authController::class,'getHome'])->name('getHome')->middleware('login');
Route::get('/', [authController::class,'getFormLogin'])->name('getFormLogin');
Route::prefix('utilisateur/')->name('auth.')->group(function () {
    Route::post('connexion', [authController::class, 'login'])->name('login');
    Route::middleware(['login'])->group(function(){
        Route::get('/logout', [authController::class, 'logout'])->name('logout');
        Route::get('profile', [authController::class,'profile'])->name('profile');
        Route::post('', [authController::class,'updateProfile'])->name('updateProfile');
        Route::middleware(['admin'])->group(function(){
            Route::get('', [authController::class,'home'])->name('home');
            Route::get('ajouter', [authController::class, 'getForm'])->name('getForm');
            Route::get('modifier/{id}', [authController::class,'getFormUpdate'])->name('getFormUpdate');
            Route::get('detail/{id}', [authController::class,'getDetail'])->name('getDetail');
            Route::post('ajouter-utilisateur', [authController::class, 'storeUser'])->name('storeUser');
            Route::post('modifier-utilisateur', [authController::class, 'updateUser'])->name('updateUser');
            Route::get('detail', [authController::class,'view'])->name('view');
            Route::get('supprimer-utilisateur/{id}', [authController::class,'deleteUser'])->name('deleteUser');
        });
    });
});
//End auth user

Route::middleware(['login'])->group(function(){
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
});


Route::middleware(['login','admin'])->group(function(){

    //Route groupe
    Route::prefix('groupe/')->name('groupe.')->group(function () {
        Route::get('', [groupeController::class,'index'])->name('home');
        Route::get('ajouter', [groupeController::class,'getForm'])->name('getForm');
        Route::get('modifier/{id}', [groupeController::class,'getFormUpdate'])->name('getFormUpdate');
        Route::get('detail/{id}', [groupeController::class,'getDetail'])->name('getDetail');
        Route::post('ajouter-groupe', [groupeController::class,'storeGroupe'])->name('storeGroupe');
        Route::post('modifier-groupe', [groupeController::class,'updateGroupe'])->name('updateGroupe');
        Route::get('detail', [groupeController::class,'view'])->name('view');
        Route::get('supprimer-groupe/{id}', [groupeController::class,'deleteGroupe'])->name('deleteGroupe');
    });
});
