   @extends('adminka.layouts.apptest')

@section('title', 'Услуги ремонт квартир под ключ')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"> <a href="{{route('uslugi remont')}}">Услуги ремонт квартир под ключ</a></li>
        </ol>
       <h3><button><a href="{{route('add img uslugi remont')}}" style="text-decoration:none;color:black;font:inherit;">Добавить картинки услуги</a></button></h3>

        <hr>

		@include('adminka.layouts.uslugi_remont.uslugi_remont1')

		@include('adminka.layouts.uslugi_remont.uslugi_remont2')

		@include('adminka.layouts.uslugi_remont.uslugi_remont3')

		@include('adminka.layouts.uslugi_remont.uslugi_remont4')

		@include('adminka.layouts.uslugi_remont.uslugi_remont5')

		@include('adminka.layouts.uslugi_remont.uslugi_remont6')

    @endsection  



@yield('footer')


