<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


//-Главная страница
Route::get('/', [MainController::class, 'index'])->name('index');

// - отображение товара
Route::get('/product', [MainController::class, 'product'])->name('product');

//-переходы по админке
Route::get('/admin', [MainController::class, 'admin'])->name('admin');

Route::get('/admin_main_data', [MainController::class, 'admin_main_data'])->name('admin_main_data');

Route::get('/admin_product', [MainController::class, 'admin_product'])->name('admin_product');

Route::get('/admin_extra', [MainController::class, 'admin_extra'])->name('admin_extra');

//---------------------------------Работа с категориями

//- Добавление категории
Route::post('/add_category', [MainController::class, 'add_category'])->name('add_category');

//- Изменение названия категории
Route::post('/category_edit/{id}', [MainController::class, 'category_edit'])->name('category_edit');

//- удаление категории
Route::get('/category_remove/{id}', [MainController::class, 'category_remove'])->name('category_remove');

//---------------------------------Работа с продуктами

//- Страница добавления продукта

Route::post('/produpt_add', [MainController::class, 'produpt_add'])->name('produpt_add');

//- Добавление продукта

Route::post('/product_save', [MainController::class, 'product_save'])->name('product_save');

//- Изменение продукта

Route::post('/product_edit/{id}', [MainController::class, 'product_edit'])->name('product_edit');

//- Удаление продукта

Route::get('/product_remote/{id}', [MainController::class, 'product_remove'])->name('product_remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
