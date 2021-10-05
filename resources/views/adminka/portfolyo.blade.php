@extends('adminka.layouts.apptest')

@section('title', 'Заголовок страницы')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


@yield('header')

  @section('content')


    <div id="wrapper">
      @include('adminka.layouts.leftmenu')
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('portfolyo')}}">Портфолио</a></li>
        </ol>

      <h3>
        <button type="button" rel="tooltip" data-toggle="modal" data-target="#insert1">
          Добавить новый портфолио
          </button>
        </h3>
        <hr>

        <!-- Add Portfolio -->
  <div class="modal" id="insert1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
          Добавить новый портфолио
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('insert portfolyo') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                    <div class="form-group">
                      <input type="text" name="portfolyo"  class="form-control"  placeholder="Введите название вашего портфолио">
                      <input type="hidden" name="home"  class="form-control"  value="1">
                    </div>
                    <div class="form-group">
                      <input type="file"  name="image" class="file-upload-default" required>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2" style="background-color: #28a745; color: white;">Добавить</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Add Portfolio -->

 
     
<div class="w3-row-padding w3-padding-16 w3-center" >

    @foreach($ShowPortfolyo as $value)
   
     <div class="w3-quarter" style="float:left;" >
      <img src="{{asset('uplodImage/portfolyo/'.$value->img)}}" alt="Sandwich" style="width:100%; height: 40%">
      <a href="{{route('Portfolyo View', ['id' => $value->id])}}"><p>{{$value->portfolyo}}</p></a>
      <a href="{{route('delete portfolyo', ['id' => $value->id])}}">Delete</a>
    </div>
    @endforeach
  
   
</div>

    @endsection  





@yield('footer')
