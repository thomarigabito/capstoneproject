<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajcController;
use App\Http\Controllers\AuthManager;

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

Route::get('/', [ajcController::class, 'homepage'])->name('homepage');
Route::get('/internetplans', [ajcController::class, 'internet'])->name('internetplans');
Route::get('/internetpromos', [ajcController::class, 'promos'])->name('internetpromos');
Route::get('/contactus', [ajcController::class, 'contactus'])->name('contactus');

Route::get('/applynow', [ajcController::class, 'applynow'])->name('applynow');
Route::post('/applynow', [ajcController::class, 'applynowPOST'])->name('applynowPOST');

Route::get('/login', [ajcController::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPOST'])->name('login.post');

Route::get('/register', [ajcController::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPOST'])->name('register.post');

Route::get('/;ogout', [AuthManager::class,'logout'])->name('logout');
