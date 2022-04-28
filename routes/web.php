<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyudaTController;
use App\Http\Controllers\PymesController;
use App\Http\Controllers\EdaseController;

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

Route::get('/AyudaT', [AyudaTController::class, 'index'])->name('ayudat.index');
Route::get('/Pymes', [PymesController::class, 'index'])->name('pymes.index');
Route::get('/Edase', [EdaseController::class, 'index'])->name('edase.index');

Route::post('/AyudaT/preview', [AyudaTController::class, 'preview'])->name('ayudat.preview');
Route::post('/Pymes/preview', [PymesController::class, 'preview'])->name('pymes.preview');
Route::post('/Edase/preview', [EdaseController::class, 'preview'])->name('edase.preview');
