@extends('adminka.layouts.apptest')

@section('title', 'Услуги доставка материалов')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

     <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('uslugi dastavka')}}">Услуги доставка материалов</a></li>
        </ol>

        <!-- Page Content -->
        <hr>



         @include('adminka.layouts.uslugi_dastavka.uslugi_dastavka1')

         @include('adminka.layouts.uslugi_dastavka.uslugi_dastavka2')
         
    @endsection  





@yield('footer')
