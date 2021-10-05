@extends('adminka.layouts.apptest')

@section('title', 'Услуги дизайнера')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  footer.sticky-footer{
    bottom: auto  !important;
  }
</style>


@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

       <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('uslugi dizaynera')}}">Услуги дизайнера</a></li>
        </ol>

        <!-- Page Content -->
        <hr>

         
      @include('adminka.layouts.uslugi_dizayner.uslugi_dizaynera1')

      @include('adminka.layouts.uslugi_dizayner.uslugi_dizaynera2')

      @include('adminka.layouts.uslugi_dizayner.uslugi_dizaynera3')

      @include('adminka.layouts.uslugi_dizayner.uslugi_dizaynera_img')

    @endsection  





@yield('footer')
