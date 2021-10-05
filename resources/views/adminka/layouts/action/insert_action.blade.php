<!-- Modal  insert -->
  <div class="modal fade" id="insert">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Добавить Акции</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <form class="forms-sample" action="{{ route('insert action') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Заголовок 1" name="action1" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Заголовок 2" name="action2" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="text" rows="4" placeholder="Текст" required></textarea>
                    </div>
                      <div class="form-group">
                      <input type="file" name="image" class="file-upload-default" required>
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