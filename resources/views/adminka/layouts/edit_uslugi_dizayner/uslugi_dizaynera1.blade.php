 <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Состав пакета</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ShowText as $value)
                  <tr>
                    <td>{{$value->text}}</td>
                    <td>
                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                      <i class="material-icons" data-toggle="modal" data-target="#edit{{$value->id}}">edit</i>
                      </button>
                      <a href="{{route('Delete Text uslugi dizayner',['id' => $value->id,'url' => Request::segment(3)])}}">
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

@foreach($ShowText as $value)
                      <!-- edit modal 1 -->
  <div class="modal" id="edit{{$value->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменить Состав пакета </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('edit text uslugi dizayner',['id' => $value->id,'url' => Request::segment(3)]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" name="text" value="{{$value->text}}">
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