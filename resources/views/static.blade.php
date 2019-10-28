@extends('layouts.base')
@section('content')
			<h2>{{isset($obj->name)?$obj->name:'404'}}</h2>
			<br style="clear:both"/>
			<div class="col-md-12">
				<div class="maintext">
{!! isset($obj->body)?$obj->body:'404' !!}
				</div>
			Текст
		   </div>
@stop