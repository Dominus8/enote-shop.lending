<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Storage;

use App\Models\CategoryModel as Category;
use App\Models\ProductModel as Product;

class MainController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
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

    public function admin_product(Request $request) {
            $category = Category::all()->where('domain', $request->getHttpHost());
            $products = Product::all()->where('product_create_domine', $request->getHttpHost());
        return view('admin_product',compact('category','products'));
    }
    public function admin_extra() {
        return view('admin_extra');
    }

    //- Добавление категории
    public function add_category(Request $request) {
        $category = new Category;
        $category->domain = $request->getHttpHost();
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
    public function category_remove($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin_product');
    }

//----------------------------- Работа с товарами

    //- Создание товара
    public function admin_product_add(Request $request) {
        $category = Category::all()->where('domain', $request->getHttpHost());
        return view('admin_product_add',compact('category'));
    }

    //- Сохранение товара
    public function admin_product_save(Request $request){

        $image = $request->file('product_images');

        $arr=array();


        foreach($image as $img){

            $x=$img->store('storage', 'product');
            array_push($arr,$x);
        }

        $product = new Product();

        $product ->product_create_domine = $request->getHttpHost();
        $product ->product_article = $request->input('product_article');
        $product ->product_title = $request->input('product_title');
        $product ->product_subtitle = $request->input('product_subtitle');
        $product ->product_description = $request->input('product_description');
        $product ->product_group_id = $request->input('product_group_id');
        $product ->product_images = $arr;
        $product ->product_wb_link = $request->input('product_wb_link');
        $product ->product_wb_price = $request->input('product_wb_price');
        $product ->product_oz_link = $request->input('product_oz_link');
        $product ->product_oz_ptice = $request->input('product_oz_ptice');
        $product ->product_ym_link = $request->input('product_ym_link');
        $product ->product_ym_price = $request->input('product_ym_price');
        $product ->product_sm_link = $request->input('product_sm_link');
        $product ->product_sm_price = $request->input('product_sm_price');
        $product ->product_av_link = $request->input('product_av_link');
        $product ->product_av_price = $request->input('product_av_price');
        $product ->product_mine_price = $request->input('product_mine_price');
        $product ->product_mine_parameters = $request->input('product_mine_parameters');
        $product ->product_variation = $request->input('product_variation');
        $product ->product_reviews_link = $request->input('product_reviews_link');

        if($request->input('product_yt_status')){
            $product->product_yt_status = true;
        }else{
            $product->product_yt_status = false;

        }

        $product->save();

        return redirect()->route('admin_product');

    }

    //--Удаление продукта

    public function product_remove($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin_product');


    }
}
