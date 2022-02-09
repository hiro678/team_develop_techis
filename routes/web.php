<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/item.create', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');
Route::get('/item.edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('item.edit');
Route::post('/item.store', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');
Route::post('/item.update/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('item.update');
Route::post('/item.destroy/{id}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('item.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

