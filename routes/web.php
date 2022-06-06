<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PrediccionController;
use App\Http\Controllers\EmployeeController;

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
    Route::get('/dashboard', [PrediccionController::class, 'index'])->name('dashboard');
    Route::get('/positions', function () {
        return view('positions');
    })->name('positions');
    Route::get('/regulation', function () {
        return view('regulation');
    })->name('regulation');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->controller(MatchesController::class)->group(function () {
    Route::resource('/matches', MatchesController::class);
    Route::get('/matches', 'index')->name('matches.index');
    Route::get('/matches/create', 'create')->name('matches.create');
    Route::post('/matches/store', 'store')->name('matches.store');
    Route::get('/matches/{id}', 'show')->name('matches.show');
    Route::get('/matches/{id}/edit', 'edit')->name('matches.edit');
    Route::post('/matches/{id}', 'update')->name('matches.update');
    Route::delete('/matches/{id}', 'destroy')->name('matches.destroy');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->controller(EmployeeController::class)->group(function () {
    Route::resource('/employee', EmployeeController::class);
    Route::get('/employee', 'index')->name('employee.index');
    Route::get('/employee/create', 'create')->name('employee.create');
    Route::post('/employee/store', 'store')->name('employee.store');
    Route::get('/employee/{id}', 'show')->name('employee.show');
    Route::get('/employee/{id}/edit', 'edit')->name('employee.edit');
    Route::post('/employee/{id}', 'update')->name('employee.update');
    Route::delete('/employee/{id}', 'destroy')->name('employee.destroy');
});
