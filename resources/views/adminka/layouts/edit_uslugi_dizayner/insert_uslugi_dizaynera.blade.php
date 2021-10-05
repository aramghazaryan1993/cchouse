 <div class="card-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert1">Добавить состав пакета</button></div>
         

            <!-- insert modal 1 -->
  <div class="modal" id="insert1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Состав пакета </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('Add text uslugi dizayner') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control"  name="text" placeholder="Добавить состав пакета" required>
                      <input type="hidden" class="form-control"  name="id" value="{{Request::segment(3)}}">
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
