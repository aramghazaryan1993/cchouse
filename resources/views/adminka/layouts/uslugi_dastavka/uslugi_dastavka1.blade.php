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
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($ShowDastavka as $value)
                  <tr>
                    <td>{{$value->text}}</td>
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
          <h4 class="modal-title">Доставка 1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @foreach($ShowDastavka as $value)
                  <form class="forms-sample" action="{{ route('insert uslugi dastavka',['id' => $value->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                     <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control summernote" rows="4" name="text">{{$value->text}}</textarea>
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
