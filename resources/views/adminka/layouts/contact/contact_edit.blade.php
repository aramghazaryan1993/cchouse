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
                    <th>Телефон</th>
                    <th>E-mail</th>
                    <th>Адрес</th>
                    <th>Адрес Яндекс</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ShowContact as $value)
                  <tr>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->adress}}</td>
                    <td>{{$value->map}}</td>
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
          <h4 class="modal-title">Изменить контактную информацию</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @foreach($ShowContact as $value)
                  <form class="forms-sample" method="post" action="{{ route('edit contact',['id' => $value->id]) }}">
                    {{ csrf_field() }}
                   <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->phone}}" name="phone">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->email}}" name="email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->adress}}" name="adress">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->map}}" name="map">
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