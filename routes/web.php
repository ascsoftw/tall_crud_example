<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/crud-generator', function () {
        return view('crud-generator');
    })->name('crud-generator');

    Route::get('/simple-pagination', function () {
        return view('simple-pagination');
    })->name('simple-pagination');

    Route::get('/eager-load-count', function () {
        return view('eager-load-count');
    })->name('eager-load-count');

    Route::get('/eager-load', function () {
        return view('eager-load');
    })->name('eager-load');

    Route::get('/delete-modal', function () {
        return view('delete-modal');
    })->name('delete-modal');
});

require __DIR__ . '/auth.php';
