<div class="card-header">
            <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#insert3">Добавить дизайнера</button></div>
                      



 <!-- edit modal 3 -->
  <div class="modal" id="insert3">
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
                  <form class="forms-sample" action="{{ route('add img uslugi dizayner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                      <input type="file" class="form-control" name="img"  required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="title1" placeholder="Добавить заголовок 1" required>
                    </div> 
                    <div class="form-group">
                      <input type="text" class="form-control" name="title2" placeholder="Добавить заголовок 2" required>
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
