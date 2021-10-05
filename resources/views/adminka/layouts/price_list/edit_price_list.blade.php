<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i></div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert"> Добавить</button>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Ед.изм.</th>
                    <th>Цена(ед.)</th>
                    <th>Изменение</th>
                    <th>удалить</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Наименование</th>
                    <th>Ед.изм.</th>
                    <th>Цена(ед.)</th>
                    <th>Изменение</th>
                    <th>удалить</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($showpriceList as $value)
                  <tr>
                    <td style="color: {{$value->color1}};">{{$value->pricelist1}}</td>
                    <td style="color: {{$value->color2}};">{{$value->pricelist2}}</td>
                    <td style="color: {{$value->color3}};">{{$value->pricelist3}}</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$value->id}}" >Изменить</button>
                    <td><button type="button" class="btn btn-danger"><a href="{{route('delete price list', ['id' => $value->id])}}" style="color:white;">Удалить</a></button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div></div>
        </div>


@foreach ($showpriceList as $value)
               <!-- The Modal  edit-->
  <div class="modal" id="edit{{$value->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Изменение Прайс-Лист</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{route('edit price list', ['id' => $value->id])}}">
                     {{csrf_field()}}
                     
                     <div class="custom-control custom-checkbox">
                      <input name="color1" type="checkbox" value="@if(empty($value->color1)) #FFA000 @else {{$value->color1}} @endif" class="custom-control-input" id="defaultChecked4{{$value->id}}"  @if(!empty($value->color1)) checked @endif>
                      <label class="custom-control-label" for="defaultChecked4{{$value->id}}">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Наименование</label>
                      <input type="text" class="form-control"  value="{{$value->pricelist1}}" name="pricelist1">
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                      <input name="color2" type="checkbox" value="@if(empty($value->color2)) #FFA000 @else {{$value->color2}} @endif" class="custom-control-input" id="defaultChecked5{{$value->id}}" @if(!empty($value->color2)) checked @endif>
                      <label class="custom-control-label" for="defaultChecked5{{$value->id}}">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Ед.изм. </label>
                      <input type="text" class="form-control"  value="{{$value->pricelist2}}" name="pricelist2">
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                      <input name="color3" type="checkbox" value="@if(empty($value->color3)) #FFA000 @else {{$value->color3}} @endif" class="custom-control-input" id="defaultChecked6{{$value->id}}" @if(!empty($value->color3)) checked @endif>
                      <label class="custom-control-label" for="defaultChecked6{{$value->id}}">ON COLOR</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Цена(ед.)</label>
                      <input type="text" class="form-control"  value="{{$value->pricelist3}}" name="pricelist3">
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