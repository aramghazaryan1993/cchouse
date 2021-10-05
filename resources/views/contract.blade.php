@extends('layouts.app_cchous')

@section('title', 'ремонт квартир')

@yield('header')

  @section('content')
        <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
                </div>
                <p> <em>Главная / Персональные Данные </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                @foreach($ShowContract as $value)
                <div class="title_text text_block">
                    <h1 class="only_h1">{{ $value->contract1 }}</h1>
                    <h5>{{ $value->contract2 }}</h5>
                    <p class="mt-5 spacial_text">{{ $value->contract3 }}</p>
                </div>
                @endforeach
            </div>
        </section>
  @endsection  





@yield('footer')