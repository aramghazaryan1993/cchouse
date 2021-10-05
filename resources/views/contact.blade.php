@extends('layouts.app_cchous')

@section('title', 'Контакты')

@yield('header')

  @section('content')
        <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="assets/img/logo.svg" alt="logo">
                </div>
                <p> <em>Главная / Контакты </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>Контакты</h1>
                </div>
                <div class="title_text_content">
                    <div>
                        <p> <span>Телефон:</span> </p>
                        <p> <span>E-mail:</span> </p>
                        <p><span>Адрес:</span> </p>
                    </div>
                @foreach($ShowContact as $value)
                    <div>
                        <p>{{ $value->phone }}</p>
                        <p> <a href="#" style="text-decoration: none">
                               {{ $value->email }}
                            </a></p>
                        <p>{{ $value->adress }}</p>
                    </div>
                
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="map">
                    <iframe src="{{ $value->map }}" frameborder="1" allowfullscreen="true"></iframe>
                </div>
            </div>
            @endforeach    
        </section>
        @include('include.defualt.vapros')
  @endsection  





@yield('footer')