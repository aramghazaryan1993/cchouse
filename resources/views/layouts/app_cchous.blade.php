<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">


    @stack('styles')
</head>


<body>
     <main>
@section('header')
         <section class="header bold_head ">
            <div class="head_main ">
                <div class="bigContainer  ">
                    <div class="menu ">
                        <div class="nav">
                            <ul>
                                <li><a href="{{ route('home view') }}" @if(Request::segment(1) == null) class="active_nav" @endif >Главная</a></li>
                                <li><a href="{{ route('company view') }}" @if(Request::segment(1) == 'Компания') class="active_nav" @endif >Компания</a></li>
                                <li><a href="{{ route('uslugi remont view') }}" @if(Request::segment(1) == 'Ремонт-квартир-под-ключ' || Request::segment(1) == 'Услуги-дизайнера' || Request::segment(1) == 'Доставка-материалов') class="active_nav" @endif>Услуги</a></li>
                                <li><a href="{{ route('portfolyo view') }}" @if(Request::segment(1) == 'Портфолио' || Request::segment(1) ==  'Портфолио-фотогалерея') class="active_nav" @endif>Портфолио</a></li>
                                <li><a href="{{ route('price list view') }}" @if(Request::segment(1) == 'Прайс-Лист') class="active_nav" @endif>Прайс-лист</a></li>
                                <li><a href="{{ route('action view') }}" @if(Request::segment(1) == 'Акции') class="active_nav" @endif>Акции</a></li>
                                <li><a href="{{ route('otziv view') }}" @if(Request::segment(1) == 'Отзывы') class="active_nav" @endif>Отзывы</a></li>
                                <li><a href="{{ route('contact view') }}" @if(Request::segment(1) == 'Контакты') class="active_nav" @endif>Контакты</a></li>
                                <li class="tel">@foreach($ShowGlobalContact as $value) {{ substr(str_limit($value->phone, 17), 0,-3) }} @endforeach</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="svglogo bigContainer">
                <img src="{{ asset('assets/img/logo1.svg') }}" alt="logo">
                <div class="menutoggel ">
                    <div class="menu_bar menu_index">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <div class="slidebar" id="slidebar">
                        <a href="#" class="closebtn">&times;</a>
                        <ul>
                          <li><a href="{{ route('home view') }}" @if(Request::segment(1) == 'Главная') class="active_nav" @endif >Главная</a></li>
                          <li><a href="{{ route('company view') }}" @if(Request::segment(1) == 'Компания') class="active_nav" @endif >Компания</a></li>
                          <li><a href="{{ route('uslugi remont view') }}" @if(Request::segment(1) == 'Ремонт-квартир-под-ключ' || Request::segment(1) == 'Услуги-дизайнера' || Request::segment(1) == 'Доставка-материалов') class="active_nav" @endif>Услуги</a></li>
                          <li><a href="{{ route('portfolyo view') }}" @if(Request::segment(1) == 'Портфолио' || Request::segment(1) ==  'Портфолио-фотогалерея') class="active_nav" @endif>Портфолио</a></li>
                          <li><a href="{{ route('price list view') }}" @if(Request::segment(1) == 'Прайс-Лист') class="active_nav" @endif>Прайс-лист</a></li>
                          <li><a href="{{ route('action view') }}" @if(Request::segment(1) == 'Акции') class="active_nav" @endif>Акции</a></li>
                          <li><a href="{{ route('otziv view') }}" @if(Request::segment(1) == 'Отзывы') class="active_nav" @endif>Отзывы</a></li>
                          <li><a href="{{ route('contact view') }}" @if(Request::segment(1) == 'Контакты') class="active_nav" @endif>Контакты</a></li>
                          <!--<li class="tel"></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
@show
        <div id="@if(session('send_email')){{session('send_email')}}@endif" style="display:none;" >
                <p>Ваш запрос отправлен.</p>
        </div>
            @yield('content')
        
@section('footer')    
         <footer>
            <div class="footer">
                <div class="bigContainer  lastblock">
                    <div class="footer_text d-flex align-item-center">
                        <ul>
                          <li><a href="{{ route('home view') }}" @if(Request::segment(1) == 'Главная') class="active_nav" @endif >Главная</a></li>
                          <li><a href="{{ route('company view') }}" @if(Request::segment(1) == 'Компания') class="active_nav" @endif >Компания</a></li>
                          <li><a href="{{ route('uslugi remont view') }}" @if(Request::segment(1) == 'Ремонт-квартир-под-ключ' || Request::segment(1) == 'Услуги-дизайнера' || Request::segment(1) == 'Доставка-материалов') class="active_nav" @endif>Услуги</a></li>
                          <li><a href="{{ route('portfolyo view') }}" @if(Request::segment(1) == 'Портфолио' || Request::segment(1) ==  'Портфолио-фотогалерея') class="active_nav" @endif>Портфолио</a></li>
                          <li><a href="{{ route('price list view') }}" @if(Request::segment(1) == 'Прайс-Лист') class="active_nav" @endif>Прайс-лист</a></li>
                        </ul>
                        <ul>
                          <li><a href="{{ route('action view') }}" @if(Request::segment(1) == 'Акции') class="active_nav" @endif>Акции</a></li>
                          <li><a href="{{ route('otziv view') }}" @if(Request::segment(1) == 'Отзывы') class="active_nav" @endif>Отзывы</a></li>
                          <li><a href="{{ route('contact view') }}" @if(Request::segment(1) == 'Контакты') class="active_nav" @endif>Контакты</a></li>
                        </ul>
                        <button style="color: #fff" href="#foot" class="fancybox">Оставить Заявку</button>
                        <div id="foot" style="display:none" class="modal_block">
                                    <h4>Оставить заявку</h4>
                                    <p>Представьтесь, мы вам перезвоним.</p>
                                    <form action="{{ route('send zayavku email') }}" method="post">
                                        @csrf
                                        <label for="name"> Ваше имя<span>*</span></label>
                                        <input type="text" name="name" placeholder="Ваше имя" id="name" required> <br>
                                        <input type="hidden"  name="segment" value="{{ Request::url() }}">
                                        <label for="tel"> Телефон <span>*</span></label>
                                        <input type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43' placeholder="+7 (___) ___-__-__" id="tel" required>
                                        <p class="mt-3"><span>*</span> - обязательные для заполнения поля</p>
                                        <div class="d-flex modal_check">
                                            <input name="yes" type="checkbox" clsss="chek1" required>
                                            <label for="chek" class="ml-1">Я согласен на 
                                                <a href="{{ route('contract view') }}" >обработку персональных данных
                                            </a></label>
                                        </div>
                                        <button type="submit"> Отправить</button>
                                    </form>
                                </div>
                    </div>
                    <div class="footer_last_box"></div>
                    <div class="copyright">
                        <p> © 2010- <span class="year">2019 </span> CCHOUSE</p>
                        <div>
                            <a href="@foreach($ShowGlobalHome as $value) {{ $value->facebook }} @endforeach">Facebook</a>
                            <a href="@foreach($ShowGlobalHome as $value) {{ $value->instagram }} @endforeach">Instagram</a>
                            <a href="@foreach($ShowGlobalHome as $value) {{ $value->youtube }} @endforeach">Youtube</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="//code.jivosite.com/widget.js" data-jv-id="KTPVeDIf7o" async></script>
@show
    </main>
</body>
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
</html>