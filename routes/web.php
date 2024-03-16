<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function() {
    return redirect('/home');
});

Auth::routes();

Route::middleware(['goto_page_admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
