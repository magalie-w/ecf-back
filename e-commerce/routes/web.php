<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PhoneController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/phone', [PhoneController::class, 'index'])->name('phone');
Route::get('/phone', [PhoneController::class, 'index'])->name('phone');

Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion');

Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');

Route::get('/contact', [ContactController::class, 'createForm']);
Route::post('/contact', [ContactController::class, 'contact'])->name('contact.store');