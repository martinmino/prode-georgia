<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PrediccionController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [PrediccionController::class, 'show'])->name('dashboard');
    Route::post('/dashboard', [PrediccionController::class, 'store'])->name('dashboard.store');
    Route::get('/positions', function () {
        return view('positions');
    })->name('positions');
    Route::get('/regulation', function () {
        return view('regulation');
    })->name('regulation');

    Route::resource('/matches', MatchesController::class);
});
