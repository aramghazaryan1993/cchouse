@extends('adminka.layouts.apptest')

@section('title', 'Заголовок страницы')

 <!-- upload image plagin -->
  
   <link href="{{ asset('adminka/plagin/style.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('adminka/plagin/dropzone.css') }}" rel="stylesheet" type="text/css">

                <!-- Script -->
  <script src="{{ asset('adminka/plagin/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('adminka/plagin/dropzone.js') }}" type="text/javascript"></script>
  <!-- upload image plagin -->


@yield('header')

  @section('content')

    <div id="wrapper">
  @include('adminka.layouts.leftmenu')
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('admin')}}">портфолио</a>
          </li>
          <li class="breadcrumb-item active">Добавить новый портфолио</li>
        </ol>

  <!-- Page Content -->
      
          <!-- 1 -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            1</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr >
                    <th>1</th>
                    <th>2</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>Bajin</td> 
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
                       <i class="material-icons">person</i>
                       </button>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#insert1">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons">close</i>
                      </button>
                  </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


          <!-- edit modal 1 -->
  <div class="modal" id="insert1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Portfolyo 1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample">
                     <div class="form-check-inline">
                      <label class="form-check-label">
                      <input name="bajin" type="radio" class="form-check-input" value="">Option 1
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                      <input name="bajin" type="radio" class="form-check-input" value="">Option 2
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                      <input name="bajin" type="radio" class="form-check-input" value="" >Option 3
                      </label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text"  class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2" style="background-color: #28a745; color: white;">Ավելացնել</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

       <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ավելացնել նկարները</h4>
           <form action="upload.php" class="dropzone" id="myAwesomeDropzone"> 
            <select class="form-control"  name="sellist2" id="nkar">
              <option>Բաժին 1</option>
              <option>Բաժին 2</option>
              <option>Բաժին 3</option>
              <option>Բաժին 4</option>
              <option>Բաժին 5</option>
            </select>
          </form>  
                </div>
              </div>
            </div>

    <!-- upload image plagin -->
      <!-- Script -->
        <script type='text/javascript'>
        Dropzone.autoDiscover = false;

        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;    
                var ok = $('#nkar').val();
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: {name: name,request: 2},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
        </script>
  <!-- upload image plagin -->
    @endsection  


@yield('footer')
