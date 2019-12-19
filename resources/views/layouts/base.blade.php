<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Progect</title>
<meta name="description" content="1-2-3">
<meta name="keywords" content="ok">
<meta name="author" content="Федчик-Ролич Марина">
<link type="text/css" href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link type="text/css" href="{{asset('media/style.css')}}" rel="stylesheet"/>
@section('styles')
@show
</head>
<body>
<div id="header">
    <a href="#"><img id="logo" src="media/img/logo.png" alt="logo"></a>
    <h1 id="logo_text">Магазин электроустановочных изделий</h1>
</div>
<nav class="topmenu">
    <a href="{{asset('catalog')}}">Каталог</a>
    <a href="{{asset('about')}}">О нас</a>
    <a href="{{asset('contacts')}}">Контакты</a>
    <a href="{{asset('delivery')}}">Доставка</a>
    <a href="{{asset('payments')}}">Оплата</a>

</nav>
<div id="body_m">
    <div class="con">
        <div class="row">

        <div class="col-md-2">
            @foreach($v_categories as $cat)
        <a class="btn btn-info btn-block" href="{{asset('category/'.$cat->id)}}">{{$cat->name}}</a>
            @endforeach
    </div>
    <div class="col-md-8">
      @yield('content')
   </div>

        <div class="col-md-2">
          @guest
 
                                <a class="btn btn-warning btn-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register')) 
                                    <a class="btn btn-warning btn-block" href="{{ route('register') }}">{{ __('Register') }}</a> 
                            @endif
                        @else 
                        <a class="btn btn-warning btn-block" href="{{ asset('home') }}">Кабинет пользователя {{ Auth::user()->name }}</a> 
 
                                    <a class="btn btn-warning btn-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
 
                        @endguest


<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
</td></tr>
<tr><td>

<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
<tr><td>
<script type="text/javascript" charset="windows-1251" src="http://www.pogoda.by/meteoinformer/js/26850_1.js"></script>
</td></tr>
</table>

</td></tr>

<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">http://www.pogoda.by</a>
</td></tr>
</table>
</div>  

        </div>
    
    </div>
</div>
<div id="foother">
    <a href="mailto:marfed05@mail.ru">marfed05@mail.ru</a>
</div>
<script type="text/javascript" src="{{asset('media/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('media/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" href="index.js"></script>
    @section('scripts')
    @show
</body>

</html>
