<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
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
// アイテム登録画面
Route::get('/item.create/{category_id}', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');
// アイテム編集画面
Route::get('/item.edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('item.edit');
// アイテム登録機能
Route::post('/item.store', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');
// アイテム編集機能
Route::post('/item.update/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('item.update');
// アイテム削除機能
Route::post('/item.delete/{id}', [App\Http\Controllers\ItemController::class, 'delete'])->name('item.delete');
// アイテム一覧画面
Route::get('/item.list/{id}', [App\Http\Controllers\ItemController::class, 'index'])->name('item.list');

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
// カテゴリー一覧表示
Route::get('/category.list', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');
Route::post('/category.list', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');
// 持ち物検索
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
// 会員情報の表示と編集
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile.edit/{id} ', [ProfileController::class, 'edit']);
Route::post('/profile.update', [ProfileController::class, 'update']);

