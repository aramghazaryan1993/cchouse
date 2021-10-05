       

              <!-- The Modal  insert-->
  <div class="modal" id="insert">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Добавить Прайс-Лист</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{route('insert price list')}}">
                    {{csrf_field()}}
                    
                    <div class="custom-control custom-checkbox">
                      <input name="color1" type="checkbox" value="#FFA000" class="custom-control-input" id="defaultChecked1" checked>
                      <label class="custom-control-label" for="defaultChecked1">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <input name="pricelist1" type="text"  class="form-control"  placeholder="Наименование" name="pricelist1" >
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                      <input name="color2" type="checkbox" value="#FFA000" class="custom-control-input" id="defaultChecked2" checked>
                      <label class="custom-control-label" for="defaultChecked2">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ед.изм."  name="pricelist2" >
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                      <input name="color3" type="checkbox" value="#FFA000" class="custom-control-input" id="defaultChecked3" checked>
                      <label class="custom-control-label" for="defaultChecked3">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Цена(ед.)" name="pricelist3" >
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