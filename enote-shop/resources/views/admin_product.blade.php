@extends('admin-master')
@section('admin-content')
<div class="admin-content-wrapper">
    <h2>Управление товарами</h2>

    <div class="category-management">
        <h3>Управление категориями</h3>

        <form action="/add_category" method="post">
            {{ csrf_field() }}
            <input  name="category_name" type="text">
            <input class="btn btn-primary" type="submit" value="Создать категорию">
        </form>

        @foreach($category as $el)
            <p>{{$el->category_name}}&nbsp{{$el->id}}&nbsp{{$el->domain}} <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCat{{$el->id}}">изменить</button><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dellCat{{$el->id}}">удалить</button></p>

            <form action="/category_edit/{{$el->id}}" method="post">
              <!-- Modal изменения категории-->
              <div class="modal fade" id="editCat{{$el->id}}" tabindex="-1" role="dialog" aria-labelledby="editCat{{$el->id}}Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <br>
                        {{ csrf_field() }}
                        <input  name="category_name" type="text" value="{{$el->category_name}}">
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Изменить">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    </div>
                </div>
            </div>
        </form>
              </div>

              <!-- Modal Удаление категории-->
              <div class="modal fade" id="dellCat{{$el->id}}" tabindex="-1" role="dialog" aria-labelledby="dellCat{{$el->id}}Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Удалить категорию {{$el->category_name}}?<br>
                      Все товары из этой категории попадут в Общие.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                      <a href="/category_remove/{{$el->id}}" type="button" class="btn btn-primary">Удалить</a>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
    </div>

{{-- Управление товарами --}}

    <div class="product-managment">

        <h3>Управление товарами</h3>

        <a href="{{ route('produpt_add') }}" class="btn btn-primary">Создать товар</a>
    </div>
    <div class="product_list">
        @foreach($products as $el)
            <p>{{$el->product_slug}}&nbsp{{$el->id}}&nbsp<button type="button" class="btn btn-primary">изменить</button><a href="/product_remove/{{$el->id}}" type="button" class="btn btn-primary">удалить</a></p>
        @endforeach
    </div>

</div>
@endsection
