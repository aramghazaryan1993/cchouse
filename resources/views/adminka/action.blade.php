@extends('adminka.layouts.apptest')

@section('title', 'Акции')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active">  <a href="{{route('action')}}">Акции</a></li>
        </ol>

         @include('adminka.layouts.action.insert_action') 

         @include('adminka.layouts.action.edit_action') 


    @endsection  





@yield('footer')
