 @extends('adminka.layouts.apptest')

@section('title', 'Изменять услуги дизайнера')




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
          <li class="breadcrumb-item active"><a href="{{route('view img uslugi dizayner',['id'=>Request::segment(3)])}}">Изменять услуги дизайнера</a></li>
        </ol>

              <!-- DataTables Example -->
        <div class="card mb-3">
         
         @include('adminka.layouts.edit_uslugi_dizayner.insert_uslugi_dizaynera')

         @include('adminka.layouts.edit_uslugi_dizayner.uslugi_dizaynera1')

         @include('adminka.layouts.edit_uslugi_dizayner.edit_img_uslugi_dizaynera')

    @endsection  





@yield('footer')

