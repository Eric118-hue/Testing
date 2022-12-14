<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\uld\UldController;
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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/export', [App\Http\Controllers\HomeController::class, 'export'])->name('export');
Route::get('/down', [App\Http\Controllers\HomeController::class, 'exportExcel'])->name('downExcel');

Auth::routes();

Route::get('/uld', [App\Http\Controllers\uld\UldController::class, 'viewSacpostaux']);
Route::get('/uld/{id}', [App\Http\Controllers\uld\UldController::class, 'show']);