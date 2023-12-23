<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('sales-system')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::prefix('customer')->group(function () {
    Route::get('/', [App\Http\Controllers\CustomerController::class, 'index']);
    Route::get('create', [App\Http\Controllers\CustomerController::class, 'showcreate']);
    Route::post('create', [App\Http\Controllers\CustomerController::class, 'executecreate']);
    Route::post('create', [App\Http\Controllers\CustomerController::class, 'executecreate']);
    Route::get('edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('edit/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
    });
});
