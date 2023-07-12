<?php

use App\Http\Controllers\Api\LoanPackageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InforPayController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SupportAppController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
        Route::get('fridge', 'fridge')->name('fridge');
        Route::get('washing', 'washing')->name('washing');
        Route::get('air-purifier', 'airPurifier')->name('air-purifier');
        Route::get('air-conditioning', 'airConditioning')->name('air-conditioning');
        Route::get('vacuum-cleaner', 'vacuumCleaner')->name('vacuum-cleaner');
        Route::get('houseware', 'houseware')->name('houseware');
        Route::get('screen', 'screen')->name('screen');
        Route::get('phone', 'phone')->name('phone');
        Route::get('watch', 'watch')->name('watch');
        Route::get('tv_av', 'tvAv')->name('tv-av');
        Route::get('soundbar', 'soundbar')->name('soundbar');
    });
    Route::get('change-password', [AuthController::class, 'viewChangePassword'])->name('user.view-change-password');
    Route::post('change-password', [AuthController::class, 'changePassword'])->name('user.change-password');
    Route::middleware(['admin'])->group(function () {

        Route::resource('user', UserController::class);
        Route::resource('promotion', \App\Http\Controllers\PromotionController::class);

        Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
            Route::get('export-fridge', 'exportFridge')->name('export-fridge');
            Route::get('export-houseware', 'exportHouseware')->name('export-houseware');
            Route::get('export-washing', 'exportWashing')->name('export-washing');
            Route::get('export-tv-av', 'exportTvAv')->name('export-tv-av');
            Route::get('export-phone', 'exportPhone')->name('export-phone');
            Route::get('export-screen', 'exportScreen')->name('export-screen');
            Route::get('export-watch', 'exportWatch')->name('export-watch');
            Route::get('export-soundbar', 'exportSoundbar')->name('export-soundbar');
        });

        Route::get('forget-password/{id}', [AuthController::class, 'forgetPassword'])->name('user.forget-password');


        Route::get('app-index', [SupportAppController::class, 'index'])->name('app.index');
        Route::get('app-create', [SupportAppController::class, 'create'])->name('app.create');
        Route::post('app-store', [SupportAppController::class, 'store'])->name('app.store');
        Route::delete('app/delete/{id}', [SupportAppController::class, 'destroy'])->name('app.destroy');
        Route::get('app/change-status/{id}', [SupportAppController::class, 'changeStatus'])->name('app.change-status');
    });
});
Auth::routes();
