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
    return view('paginaInicial');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('pages.index');
        })->name('admin');

        Route::resources([
            'incomes' => \App\Http\Controllers\IncomeController::class,

        ]);

      //  Route::resource('incomes', 'IncomeController');

        Route::get('entrances', function () {
            return view('pages.entrances');
        });
        Route::get('costs', function () {
            return view('pages.costs');
        });
        Route::get('mpesa', function () {
            return view('pages.mpesa');
        });
        Route::get('visa', function () {
            return view('pages.visa');
        });
        Route::get('master-card', function () {
            return view('pages.master-card');
        });

    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
