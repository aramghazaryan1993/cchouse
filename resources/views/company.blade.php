@extends('layouts.app_cchous')

@section('title', 'Компании')

@yield('header')

  @section('content')
             <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="assets/img/logo.svg" alt="logo">
                </div>
                <p> <em>Главная / Компания </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>о компании</h1>
                    <h5>@foreach($ShowCompany as $value) {{  $value->company2 }} @endforeach</h5>
                   
                    <p>@foreach($ShowCompany as $value) {{  $value->company3 }} @endforeach</p>
                </div>
            </div>
        </section>
              @include('include.defualt.vapros')
  @endsection  





@yield('footer')