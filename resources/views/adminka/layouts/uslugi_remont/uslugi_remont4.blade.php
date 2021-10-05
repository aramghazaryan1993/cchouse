<!-- 4 -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            4</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr >
                    <th>1</th>
                    <th>2</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($ShowRemont as $value)
                  <tr>
                    <td>{{$value->remont6}}</td>
                    <td>{{$value->remont7}}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#edit4">edit</i>
                      </button>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>


           <!-- edit modal 4 -->
  <div class="modal" id="edit4">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Услуги ремонт 4</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   @foreach($ShowRemont as $value)
                     <form class="forms-sample" action="{{ route('edit uslugi remont4',['id'=>$value->id]) }}" method="POST">
                      @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" value="{{$value->remont6}}" name="remont6">
                      <input type="hidden" class="form-control"  value="{{$value->id}}" name="id">
                    </div>
          <div class="form-group">
                      <textarea class="form-control summernote" rows="4" name="remont7">{{$value->remont7}}</textarea>
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