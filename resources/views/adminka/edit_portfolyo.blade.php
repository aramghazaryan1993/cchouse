@extends('adminka.layouts.apptest')

@section('title', 'Заголовок страницы')
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
          <li class="breadcrumb-item">
            <a href="{{route('portfolyo')}}">Портфолио</a>
          </li>
          <li class="breadcrumb-item active">
          <a href="{{ route('Portfolyo View',['id'=> Request::segment(3)]) }}">Добавить новый фотографии</a>
          </li>
        </ol>
        <h3>
        <button type="button" rel="tooltip" data-toggle="modal" data-target="#insertImage">
          Добавить новый фотографии
          </button>
        </h3>


        <!-- image -->
<div class="w3-row-padding w3-padding-16 w3-center" >
      @foreach($ShowImg as  $value)
   <div class="w3-quarter" style="@if($value->home == 1)float:left;border-style: solid;
  border-color: coral; @endif"   >

      <img src="{{asset('uplodImage/portfolyo/'.$value->img)}}"  alt="Sandwich" style="width:100%;height: 17.4em;">

        <p>
          <form method="POST" action="{{ route('home image') }}">
              @csrf
            <input type="hidden" name="homeId"  class="form-control" value="{{$value->id}}">
            <input type="hidden" name="urlId"  class="form-control" value="{{ Request::segment(3) }}">
            <button>Главный</button>
          </form>
           <a href="{{route('delete image portfolyo',['id' => $value->id,'urlID'=>Request::segment(3)])}}">удалить</a>
        </p>
     </div>
    @endforeach

  </div>

        <!-- image -->

  <!-- Page Content -->
      
          <!-- 1 -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Изменить название портфеля</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Название портфолио</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ShowTitle as $value)
                  <tr>
                    <td>{{$value->portfolyo}}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#edit{{$value->id}}">edit</i>
                      </button>
                   
                      </button>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

 @foreach($ShowTitle as $value)
          <!-- edit modal 1 -->
  <div class="modal" id="edit{{$value->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменить название портфеля</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('Edit title portfolyo') }}" method="POST">
                       @csrf
                    <div class="form-group">
                      <input type="text" name="portfolyo"  class="form-control" value="{{$value->portfolyo}}">
                      <input type="hidden" name="idd"  class="form-control" value="{{$value->id}}">
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2" style="background-color: #28a745; color: white;">Изменить</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


 @endforeach

             <!-- Add Iamge -->
  <div class="modal" id="insertImage">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Добавить новый фотографии</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample"  action="{{ route('Add image') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                    <div class="form-group">
                      <input type="file" name="img[]" multiple class="form-control">
                     
                      <input type="hidden" name="idd"  class="form-control" value="{{$value->id}}">
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
</div>
    @endsection  


@yield('footer')
