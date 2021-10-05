  

  <div class="w3-row-padding w3-padding-16 w3-center"   >
   @foreach($ShowImg as $value)
     <div class="w3-quarter" style="float:left;" >
      <a href="{{route('view img uslugi dizayner',['id'=>$value->id])}}">
      <img src="{{asset('uplodImage/uslugi_dizayner/'.$value->img)}}" alt="Sandwich" style="width:100%;height: 15em;">
      <h3>{{$value->title1}}</h3>
      <p>{{$value->title2}}</p>
    </a>
    </div>
  @endforeach

  </div>
</div>