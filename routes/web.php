<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coins\SubmitCoinController;
use App\Http\Controllers\Coins\MainController;

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
    return view('index');
});

Route::get('/submit', [SubmitCoinController::class, 'create']);

Route::get('/update', [SubmitCoinController::class, 'update']);

Route::get('/contact', [MainController::class, 'contact']);

Route::get('/terms-and-conditions', [MainController::class, 'termsAndConditions']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
