@extends('layouts.base')
                @section('scripts')
                @parent
                <script src="{{asset('public/ckeditor5-build-classic/ckeditor.js')}}"></script>
                <script>
ClassicEditor
    .create( document.querySelector( '#body' ), {
    } )
    .catch( error => {
        console.log( error );
    } );
                </script>
                @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
        <form action="{{asset('home')}}" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}
            <div class="form-group">
                 <label for="formGroupExampleInput" >Название товара</label>
                <input type="text" class="form-control" id="name" name="name" for="name" placeholder="Defne H12">
                </div>
                 @error('name')
                                    <span class="alert alert-danger myAlert" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <div class="form-group">
                <label for="formGroupExampleInput2" >Цена</label>
                <input type="text" class="form-control" id="price" name="price" for="price" placeholder="20">
                </div>
            <div class="form-group">
                <label for="body">Полное описание</label>

                <textarea type="text" class="form-control" id="body" name="body"  placeholder="Введите полное описние"></textarea>
                                 @error('body')
                                    <span class="alert alert-danger myAlert" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" name="">Краткое описание</label>
                <textarea type="text" class="form-control" id="small_body" name="small_body" for="small_body" placeholder="Введите краткое описание"></textarea>
            </div>
            <div class="form-group">
                  
               <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Категории</label>
            <select class="custom-select my-1 mr-sm-2" id="category_id" name="category_id" for="category_id">
            <option selected>Выберите категорию</option>
            @foreach($cats as $one)
            <option value="{{$one->id}}">{{$one->name}}</option>
                @endforeach
            </select>
            </div>
                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <div class="form-group">
                <div class="custom-file">
            <input type="file" class="custom-file-input" id="picture1" name="picture1">
            <label class="custom-file-label" for="picture1">Выбрать картинку</label>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

        <table class="table table-bordered table-striped" width="100%">
            <tr>
               <th width="200px">Изображение</th>
               <th>Название</th>
               <th>Описание</th>
               <th>Категории</th>
               <th>Действие</th>
            </tr>
            @foreach($products as $one)
                <tr>
                    <td>
                        @if($one->picture)
                        <img src="{{asset('uploads/'.$one->user_id.'/s_'.$one->picture)}}" width="100%">
                        @endif
                    </td>
                    <td>{{$one->nameProduct}}</td>
                    <td>{{!!$one->description!!}}</td>
                    <td>{{isset($one->catalogs->name)?$one->catalogs->name:" "}}</td>
                    <td>
                        <a href="{{asset('home/edit/'.$one->id)}}" class="btn btn-block btn-success">Редактировать</a>
                        <a href="{{asset('home/delete/'.$one->id)}}" class="btn btn-block btn-default">Удалить</a>
                    </td>
                </tr>
                @endforeach
        </table>
        {{!!$products->links()!!}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
