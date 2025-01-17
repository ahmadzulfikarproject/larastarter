<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');
// Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();
// Socialite routes
Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
    // Route::get('app/dashboard/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages route e.g. [about,contact,etc]
Route::get('/{slug}', PageController::class)->name('page');
