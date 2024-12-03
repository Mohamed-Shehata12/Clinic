<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\RegisterController;

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

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/majors',[MajorsController::class,'index'])->name('majors.index');
Route::get('/doctors', [DoctorsController::class,'index'])->name('doctors.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::get('/register',[RegisterController::class,'index'])->name('register.index');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/send-message',[ContactController::class,'sendMessage']);

require_once('admin.php');
