<?php

use App\Http\Controllers\ControllerBeranda;
use App\Http\Controllers\ControllerFeedback;
use App\Http\Controllers\ControllerInformasi;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardWisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\FeedbackController;
use App\Models\tiket;

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

Route::get('dashboard',[DashboardController::class,'index']);
Route::Resource('/wisata',DashboardWisataController::class);
Route::get('/beranda',[ControllerBeranda::class,'index']);
Route::get('/informasi',[ControllerInformasi::class,'index']);
Route::get('/feedbackPage',[ControllerFeedback::class,'index']);
Route::resource('/tiket', TiketController::class);
Route::get('/tiket/create/{id}',[TiketController::class,'create'])->name('create');
Route::resource('/feedback',FeedbackController::class);