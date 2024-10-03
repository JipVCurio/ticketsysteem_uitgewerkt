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
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('events', EventsController::class);
});

//The guest routes
Route::get('/', [PagesController::class, 'events'])->name('events');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/events/show/{id}', [PagesController::class, 'showEvent']);