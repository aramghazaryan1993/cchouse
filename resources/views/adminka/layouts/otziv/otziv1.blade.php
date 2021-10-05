<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table">1</i>
         </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Картинки</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Ваше Мнение</th>
                    <th>Оценка</th>
                    <th>Удалить</th>
                  </tr>
                </thead>
                
                <tbody>
                   @foreach ($showOtziveList as $value)
                  <tr>
                    <td><img src="https://cchouse.ru/uplodImage/otziv/{{$value->img}}" alt="Sandwich" style="width:100%"></td>
                    <td>{{$value->name}}</td>
                    <td style="width:100%;">{{$value->phone}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->text}}</td>
                    <td style="width:100%;">
                      
                      <div class="comment_star">
                        @for ($i = 0; $i < $value->star; $i++)
                                    <svg style="width: 25px;" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                        <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                    </svg>
                                    @endfor
                                </div>
                                
                    </td>
                    <td><button type="button" class="btn btn-danger"><a href="{{route('delete otziv',['id' => $value->id])}}" style="color:white;">Удалить</a></button></td>
                  </tr>
               @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>