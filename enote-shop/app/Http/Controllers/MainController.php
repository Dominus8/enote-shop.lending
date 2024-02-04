<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel as Category;

class MainController extends Controller
{
// Главная
    public function index() {
        return view('index');
    }

// Продукт
    public function product() {
        return view('product');
    }

// Админка
    public function admin() {
        return view('admin');
    }
    public function admin_main_data() {
        return view('admin_main_data');
    }
    public function admin_product() {
        $category = Category::all();
        return view('admin_product',['category'=>$category]);
    }
    public function admin_extra() {
        return view('admin_extra');
    }

    //- Добавление категории
    public function add_category(Request $request) {
        $category = new Category;
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->route('admin_product');
    }

    //- Изменение категории
    public function category_edit($id, Request $request) {
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->route('admin_product');
    }

    //- Удаление категории
    public function category_remote($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin_product');
    }
}
