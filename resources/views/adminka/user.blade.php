@extends('adminka.layouts.apptest')

@section('title', 'User')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active">User</li>
        </ol>

       <!-- user -->
       
       
       
                  <!-- 8 -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            8</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($ShowUser as $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#editUser{{ $value->id }}">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                          <a style="text-decoration:none;color:white;" href="{{ route('user delete',['id' => $value->id]) }}">
                      <i class="material-icons">close</i>
                      </a>
                      </button>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>


 <!-- edit modal 8 -->
 @foreach($ShowUser as $value)
  <div class="modal" id="editUser{{ $value->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменить данные пользователя</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{route('edit user', ['id' => $value->id])}}">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" class="form-control"  value="{{ $value->name }}" name="name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" value="{{ $value->email }}" name="email">
                    </div>
                    <div class="form-group">
                       Согласны ли вы сменить пароль?
                      <input type="checkbox" class="form-control" name="yes" >
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control" name="password" placeholder="Введите новый пароль">
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
       <!-- user -->


    @endsection  





@yield('footer')
