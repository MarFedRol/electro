@extends('layouts.base')
@section('scripts')
  @parent

@endsection
@section('styles')
  @parent

@endsection
@section('content')
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$category->name)}}</div>
                  <div class="card-body">{{$prod->body}}</div>
                    <div class="card-text">{{$prod->small_body}}</div> 
                    <br style="clear:both"/>
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm my_modal">Открыть</a> 
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm go">Перейти</a>
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm buy">Купить</a>
                
            </div>
        </div>
        @endforeach
    </div>
    <p>
        {!!$products->links()!!}
    </p>
</div>
@endsection
