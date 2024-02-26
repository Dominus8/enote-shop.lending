@extends('admin-master')
@section('admin-content')
<div class="admin-content-wrapper">
<h2>Добавление нового товара</h2>
<div class="add_product">
    <form action="/product_save" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
           <label for="product_article">Артикул</label>
            <input class="form-control form-control-sm" name="product_article" id="product_article" type="text">
        </div>
        <br>
        <div class="form-group">
            <label for="product_subtitle">Название</label>
            <input class="form-control form-control-sm" name="product_title" id="product_title" type="text">
        </div>
        <br>
        <label for="product_subtitle"> Кратное описание</label>
        <input class="form-control form-control-sm" name="product_subtitle" id="product_subtitle" type="text">
        <br>
        <label for="product_description">Полное описание</label>
        <input class="form-control form-control-sm" name="product_description" id="product_description" type="text">

        <label for="product_group_id">Группа товаров</label>

        <select name="product_group_id" class="form-control form-control-sm" id="product_group_id">
            @foreach($category as $el)
                <option value = "{{$el->id}}" label = "{{$el->category_name}}">
            @endforeach
        </select>
        <br>

        <label for="product_images">Изображение</label>
        <input type="file" class="form-control form-control-sm-file" name="product_images[]" id="product_images" multiple>
        <br>

        <label for="product_mine_parameters">Пораметры товара</label>
        <input class="form-control form-control-sm" type="text" name="product_mine_parameters" id="product_mine_parameters">
        <br>

        <label for="product_variation">Пораметры товара</label>
        <input class="form-control form-control-sm" type="text" name="product_variation" id="product_variation">
        <br>



        <div class="form-group">
            <label for="product_wb_link">Ссылка на ВБ</label>
            <input class="form-control form-control-sm" name="product_wb_link" id="product_wb_link" type="text">
            <label for="product_wb_price">Цена на ВБ</label>
            <input class="form-control form-control-sm" name="product_wb_price" id="product_wb_price" type="text">
        </div>
        <br>

        <div class="form-group">
            <label for="product_oz_link">Ссылка на ОЗОН</label>
            <input class="form-control form-control-sm" name="product_oz_link" id="product_oz_link" type="text">
            <label for="product_oz_ptice">Цена на ОЗОН</label>
            <input class="form-control form-control-sm" name="product_oz_ptice" id="product_oz_ptice" type="text">
        </div>
        <br>

        <div class="form-group">
            <label for="product_ym_link">Ссылка на ЯндексМарркет</label>
            <input class="form-control form-control-sm" name="product_ym_link" id="product_ym_link" type="text">
            <label for="product_ym_price">Цена на ЯндексМаркет</label>
            <input class="form-control form-control-sm" name="product_ym_price" id="product_ym_link" type="text">
        </div>
        <br>

        <div class="form-group">
            <label for="product_sm_link">Ссылка на СММ</label>
            <input class="form-control form-control-sm" name="product_sm_link" id="product_sm_link" type="text">
            <label for="product_sm_price">Цена СберМегаМаркет</label>
            <input class="form-control form-control-sm" name="product_sm_price" id="product_sm_price" type="text">
        </div>
        <br>

        <div class="form-group">
            <label for="product_av_link">Ссылка на Авито</label>
            <input class="form-control form-control-sm" name="product_av_link" id="product_av_link" type="text">
            <label for="product_av_price">Цена Авито</label>
            <input class="form-control form-control-sm" name="product_av_price" id="product_av_price" type="text">
        </div>
        <br>

        <label for="product_mine_price">Цена на сайте</label>
        <input class="form-control form-control-sm" name="product_mine_price" id="product_mine_price" type="text">
        <br>

        <label for="product_reviews_link">ID плагина отзывов </label>
        <input class="form-control form-control-sm" name="product_reviews_link" id="product_reviews_link" type="text">
        <br>

        <label for="product_yt_status">Добавить в Яндекс товары</label>
        <input type="checkbox" class="form-check-input"  name="product_yt_status" id="product_yt_status" type="chekbox">
        <br>
        <br>
        <input class="btn btn-success" type="submit" value="Создать товар">
        <br>
        <br>
    </form>
</div>
</div>
@endsection
