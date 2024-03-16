<?php

use App\Dictionaries\RoleDictionary;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::middleware(['auth', 'role:'. RoleDictionary::ADMINISTRATOR])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'categories', 'as' => 'category.'], function() {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/create', [CategoryController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('edit/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });
});
