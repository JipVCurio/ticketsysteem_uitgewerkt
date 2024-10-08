<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

//The authenticated routes
Route::group(['prefix' => 'dashboard', 'middleware' => 'is_administrator'], function() {
    Route::resource('events', EventsController::class);
});

//The guest routes
Route::get('/', [EventsController::class, 'index'])->name('home');
Route::get('/events', [EventsController::class, 'events'])->name('events');
Route::get('/events/show/{id}', [EventsController::class, 'show']);