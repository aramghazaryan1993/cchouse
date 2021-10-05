@extends('adminka.layouts.apptest')

@section('title', 'Прайс-Лист')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

       <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('price list')}}">Прайс-Лист</a></li>
        </ol>

      @include('adminka.layouts.price_list.price_list_insert')

      @include('adminka.layouts.price_list.edit_price_list')
        
   

    @endsection  





@yield('footer')
