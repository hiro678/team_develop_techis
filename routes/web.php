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
Route::get('/item.create', [App\Http\Controllers\ItemController::class, 'create'])->name('item');
Route::get('/item.edit', [App\Http\Controllers\ItemController::class, 'edit'])->name('item.edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// カテゴリー追加画面を表示
Route::get('/category.create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category');
// カテゴリー追加
Route::post('/category.store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
// カテゴリー編集画面を表示
Route::get('/category.edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
// カテゴリー編集
Route::post('/category.update', [App\Http\Controllers\CategoryController::class, 'update'])->name('cayegory.update');
// カテゴリー削除
Route::post('/category.delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
// 持ち物検索
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
