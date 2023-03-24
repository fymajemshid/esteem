<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinupController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ImageController;
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

Route::get('/', function () {
    return view('sinin');
});


Route::get('home',[HomeController::class,'index'])->name('home');
// Route::get('sinup',[SinupController::class,'store'])->name('sinup.store');
Route::get('/sinup',[SinupController::class,'create'])->name('sinup');
Route::post('/store',[SinupController::class,'store'])->name('sinup.store');
Route::get('/sinin',[SinupController::class,'index'])->name('sinin');
Route::post('/sinin-sinin',[SinupController::class,'sinin'])->name('sinin.sinin');
Route::get('/forgotPassword',[SinupController::class,'forgotPassword'])->name('forgotPassword');
Route::post('/changepassword',[SinupController::class,'ChangePassword'])->name('ChangePassword');
Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::post('/save',[RegisterController::class,'store'])->name('register.store');
Route::get('/biodata',[DataController::class,'create'])->name('biodata');
Route::post('/save_data',[DataController::class,'store'])->name('biodata.store');
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});



