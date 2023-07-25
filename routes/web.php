<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('index');
Route::view('/membres', 'membres')->name('membres');
Route::view('/profil', 'profil-detail')->name('profil');

Route::get('/condition-generale-utilisation', function () {
    echo "nos conditions d'utilisation";
})->name('cgu');

Route::get('/politique-de-confidentialite', function () {
    echo "notre politique de confidentialite";
})->name('politique');

Route::get('/faq', function () {
    echo "FAQ";
})->name('faq');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])
    ->group(function () {
        Route::view('/dashboard', 'users.dashboard')->name('dashboard');
        Route::view('/abonnement', 'users.abonnements')->name('abonnement');
    });
