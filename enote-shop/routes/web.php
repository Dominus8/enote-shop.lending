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
Route::get('/category_remote/{id}', [MainController::class, 'category_remote'])->name('category_remote');



