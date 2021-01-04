<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [PagesController::class, 'home']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/dashboard/siswa', [SiswaController::class, 'dashboard']);

Route::get('/dashboard/siswa/create', [SiswaController::class, 'create']);

Route::POST('/siswa', [SiswaController::class, 'store']);


Route::delete('/dashboard/{siswa}', [SiswaController::class, 'destroy']);

Route::get('/dashboard/{siswa}/edit', [SiswaController::class, 'edit']);

Route::get('/dashboard/{siswa}/detail', [SiswaController::class, 'detail']);

Route::patch('/siswa/edit/{siswa}', [SiswaController::class, 'update']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);
