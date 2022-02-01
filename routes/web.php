<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Auth::routes();
Route::get('/', function() { 
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::name('events')->group(function(){
    Route::get('/events', [EventController::class, 'index'])->name('.list');
    Route::get('/events/create', [EventController::class, 'create'])->name('.create');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('.show');
    Route::post('/events', [EventController::class, 'store'])->name('.store');
    Route::put('events/{id}', [EventController::class, 'update'])->name('.update'); 
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('.destroy');
});


Route::post('/users/{id}', [UserController::class, 'store'])->name('.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('.destroy');