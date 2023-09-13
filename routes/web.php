<?php

use App\Http\Controllers\ReportController;
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


Auth::routes();
Route::middleware('auth')->get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::middleware('auth')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->post('/reports', [ReportController::class, 'store'])->name('report.store');
Route::middleware('auth')->post('/update/reports/{id}', [ReportController::class, 'update'])->name('report.update');
Route::middleware('auth')->get('/reports', [ReportController::class, 'index'])->name('report.index');
Route::middleware('auth')->get('/reports/{id}', [ReportController::class, 'show'])->name('report.show');
Route::middleware('auth')->get('/reports/{id}/edit', [ReportController::class, 'create'])->name('report.create');
Route::middleware('auth')->delete('/reports/{id}', [ReportController::class, 'destroy'])->name('report.destroy');
