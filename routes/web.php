<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');

Route::middleware('auth')->controller(CheckoutController::class)->group(function () {
    Route::post('/checkout/{id}', 'process')->name('checkout_process');
    Route::get('/checkout/{id}', 'index')->name('checkout');
    Route::get('/checkout/remove/{detail_id}', 'remove')->name('checkout_remove');
    Route::post('/checkout/create/{detail_id}', 'create')->name('checkout_create');
    Route::post('/checkout/success/{id}', 'success')->name('checkout_success');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/travel-packages', TravelPackageController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::resource('/transactions', TransactionController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
