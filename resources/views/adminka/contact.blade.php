@extends('adminka.layouts.apptest')

@section('title', 'Контакты')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

    

      <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('contact')}}" >Контакты</a></li>
        </ol>

        <!-- Page Content -->
        <hr>

      @include('adminka.layouts.contact.contact_edit')
     

    @endsection  





@yield('footer')
