@extends('adminka.layouts.apptest')

@section('title', 'Главная')




@yield('header')

  @section('content')

    <div id="wrapper">


      @include('adminka.layouts.leftmenu')

      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active">Главная</li>
      </ol>

      @include('adminka.layouts.home.home1')

      @include('adminka.layouts.home.home2')       

      @include('adminka.layouts.home.home3')               

      @include('adminka.layouts.home.home4') 

      @include('adminka.layouts.home.home5')     

      @include('adminka.layouts.home.home6') 

      @include('adminka.layouts.home.home7')

      @include('adminka.layouts.home.home_socanc')

    @endsection  





@yield('footer')
