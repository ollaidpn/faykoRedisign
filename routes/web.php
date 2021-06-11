<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('accueil');
Route::get('/historique', [App\Http\Controllers\AdminController::class, 'historique'])->name('historique');
Route::get('/transactions', [App\Http\Controllers\AdminController::class, 'transactions'])->name('transactions');
Route::get('/versements', [App\Http\Controllers\AdminController::class, 'versements'])->name('versements');


Route::get('/cartes-bancaire', [App\Http\Controllers\AdminController::class, 'cartes'])->name('cartes');
Route::get('/services', [App\Http\Controllers\AdminController::class, 'services'])->name('services');

Route::get('/agents', [App\Http\Controllers\AdminController::class, 'agents'])->name('agents');
