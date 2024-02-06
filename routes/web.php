<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajcController;

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
Route::get('/login', [ajcController::class, 'login'])->name('login');