
                          <!-- 2 -->
        <div class="card mb-3">
          <div class="card-header">
           Изменять услуги дизайнера</div>
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
                  @foreach($ViewImage as $value)
                  <tr>
                    <td><img src="{{asset('uplodImage/uslugi_dizayner/'.$value->img)}}" style="width: 100px;"></td>
                    <td>{{$value->title1}}</td>
                    <td>{{$value->title2}}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#editt2">edit</i>
                      </button>
                        <a href="{{route('delete uslugi dizayner',['id' => Request::segment(3)])}}">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons">close</i>
                      </button>
                        </a>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>




   <!-- edit modal 3 -->
  <div class="modal" id="editt2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Услуги дизайнера 3</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   @foreach($ViewImage as $value)
                  <form class="forms-sample"  action="{{ route('edit img uslugi dizayner',['id'=>$value->id]) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                      <input type="file" name="img" class="form-control"  >
                    </div>
                    <div class="form-group" >
                      <input type="text" class="form-control" value="{{$value->title1}}" name="title1" required>
                    </div> 
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->title2}}" name="title2"  required>
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

</div>