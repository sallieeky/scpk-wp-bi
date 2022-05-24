<?php

use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, 'home']);
  Route::get('/kelola-akun', [DashboardController::class, 'kelolaAkun'])->middleware('adminonly');
  Route::get('/kelola-akun/delete/{user}', [DashboardController::class, 'kelolaAkunDelete']);

  Route::get('/logout', [DashboardController::class, 'logout']);
});
Route::get('/rank', [DashboardController::class, 'rankWp']);

Route::get('/login', [DashboardController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [DashboardController::class, 'loginAuth']);

Route::get('/register', [DashboardController::class, 'register']);
Route::post('/register', [DashboardController::class, 'registerPost']);
