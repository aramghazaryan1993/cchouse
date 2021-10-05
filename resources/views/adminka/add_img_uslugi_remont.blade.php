   @extends('adminka.layouts.apptest')

@section('title', 'Добавить картинки услуги ремонт квартир под ключ')
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

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
           <li class="breadcrumb-item active">
               <a href="{{ route('uslugi remont') }}">Услуги ремонт квартир под ключ</a>
               </li>
          <li class="breadcrumb-item active"> <a href="{{ route('add img uslugi remont') }}">Добавить картинки услуги ремонт квартир под ключ</a></li>
        </ol>
        <h1><button data-toggle="modal" data-target="#edit7">Добавить картинки</button></h1>

        <hr>
         @include('adminka.layouts.uslugi_remont.uslugi_remont_add_img')

		        <!-- image -->
        <div class="w3-row-padding w3-padding-16 w3-center" >
          @foreach($ShowImage as $value)
             <div class="w3-quarter" style="float:left;" >
              <img src="{{asset('uplodImage/uslugi_remont/'.$value->img)}}" alt="Sandwich" style="width:100%; height: 40%">
              <a href="{{route('delete img uslugi remont',['id'=> $value->id])}}"><p>удалить</p></a>
            </div>
          @endforeach
          </div>
          
@endsection  



@yield('footer')


