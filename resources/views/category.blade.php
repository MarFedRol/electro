@extends('layouts.base')
@section('scripts')
  @parent

@endsection
@section('styles')
  @parent

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div  class="card-header">{{$obj->name}}</div>
                <div class="row">
                @foreach($obj->products()->get() as $prod)

                <div class="col-md-4">
                  <div class="card-body">
@if($prod->picture)
 <img src="{{asset('uploads/'.$prod->user_id.'/s_'.$prod->picture)}}" width="100%" />
@endif
                  </div>
                    <div class="card-text">{{$prod->small_body}}</div> 
                    <br style="clear:both"/>
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm my_modal">Открыть</a> 
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm go">Перейти</a>
                    <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm buy">Купить</a>
                </div>

                @endforeach
                            </div>
            </div>
        </div>
    </div>
    <p>

    </p>
</div>
@endsection
