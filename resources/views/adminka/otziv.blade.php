@extends('adminka.layouts.apptest')

@section('title', 'Отзывы Клиентов')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

      <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('otziv')}}">Отзывы Клиентов</a></li>
        </ol>

        @include('adminka.layouts.otziv.otziv1')

        @include('adminka.layouts.otziv.edit_otziv')



    @endsection  





@yield('footer')
