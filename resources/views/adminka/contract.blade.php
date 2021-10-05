@extends('adminka.layouts.apptest')

@section('title', 'Соглашение')




@yield('header')

  @section('content')

    <div id="wrapper">

      @include('adminka.layouts.leftmenu')
      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">Панель администратора</a>
          </li>
          <li class="breadcrumb-item active"><a href="{{route('contract')}}">Соглашение</a></li>
        </ol>

                                                     <!-- 1 -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            1</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ShowContract as $value)
                  <tr>
                    <td>{{$value->contract1}}</td>
                    <td>{{$value->contract2}}</td>
                    <td>{{$value->contract3}}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#edit1">edit</i>
                      </button>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>




                                                  <!-- edit modal 1 -->
  <div class="modal" id="edit1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменить детали соглашения</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   @foreach($ShowContract as $value)
                  <form class="forms-sample" method="post" action="{{route('edit contract',['id' => $value->id])}}">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" class="form-control"   value="{{$value->contract1}}" name="contract1">
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control"   value="{{$value->contract2}}" name="contract2">
                    </div>
                     <div class="form-group">
                      <textarea class="form-control" name="contract3" rows="10">{{$value->contract3}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2" style="background-color: #28a745; color: white;">Изменить</button>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    @endsection  





@yield('footer')
