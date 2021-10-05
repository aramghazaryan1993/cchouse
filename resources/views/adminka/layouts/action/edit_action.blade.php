      <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert">Добавить
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Картинки</th>
                    <th>Заголовок 1</th>
                    <th>Заголовок 2</th>
                    <th>Текст</th>
                    <th>Изменение</th>
                    <th>Удалить</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ShowAction as $value)
                  <tr>
                    <td>
                      <img src="{{asset('uplodImage/action/'.$value->img)}}" alt="Sandwich" style="width:7%">
                    </td>
                    <td>{{$value->action1}}</td>
                    <td>{{$value->action2}}</td>
                    <td>{{$value->text}}</td>
                    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$value->id}}">Изменить
            </button></td>
                    <td>
                      <a href="{{route('delete action',['id' => $value->id])}}">
                       <button type="button" class="btn btn-danger">Удалить</button>
                      </a>
                    </td>
                  </tr>
                   @endforeach
              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>


        
  @foreach($ShowAction as $value)
  <!-- The Modal -->
  <div class="modal fade" id="edit{{$value->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменение Акции</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('edit action',['id'=>$value->id]) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                      <input type="text" class="form-control"  value="{{$value->action1}}" name="action1">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->action2}}" name="action2">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="4" name="text">{{$value->text}}</textarea>
                    </div>
                      <div class="form-group">
                        
                      <label><img src="{{asset('uplodImage/action/'.$value->img)}}" alt="Sandwich" style="width:7%"></label>
                      <input type="file" name="image" class="file-upload-default">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                 
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
