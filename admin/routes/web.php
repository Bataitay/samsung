<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
    Route::get('fridge', 'fridge')->name('fridge');
    Route::get('washing', 'washing')->name('washing');
    Route::get('air-purifier', 'airPurifier')->name('air-purifier');
    Route::get('air-conditioning', 'airConditioning')->name('air-conditioning');
    Route::get('vacuum-cleaner', 'vacuumCleaner')->name('vacuum-cleaner');
    Route::get('houseware', 'houseware')->name('houseware');
    Route::get('screen', 'screen')->name('screen');
    Route::get('phone', 'phone')->name('phone');
    Route::get('tv_av', 'tvAv')->name('tv-av');
    Route::get('export-fridge', 'exportFridge')->name('export-fridge');
    Route::get('export-houseware', 'exportHouseware')->name('export-houseware');
    Route::get('export-washing', 'exportWashing')->name('export-washing');
    Route::get('export-tv-av', 'exportTvAv')->name('export-tv-av');
    Route::get('export-phone', 'exportPhone')->name('export-phone');
    Route::get('export-screen', 'exportScreen')->name('export-screen');
});
Route::get('/', function () {
    return view('Fe.home');
});
//Route::get('/fridge', function () {
//    return view('Fe.products.fridge');
//});
