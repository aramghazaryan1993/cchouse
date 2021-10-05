
                      <!-- Add image uslugi remont 7 -->
  <div class="modal" id="edit7">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Добавить картинки</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('add img uslugi remont') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <input multiple type="file" class="form-control" name="img[]" required>
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
