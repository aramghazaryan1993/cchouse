@extends('layouts.app_cchous')

@section('title', 'Прайс-Лист')

@yield('header')

  @section('content')
                   <section>
            <section>
                <div class="bigContainer under_nav">
                    <div class="logo_black">
                        <img src="assets/img/logo.svg" alt="logo">
                    </div>
                    <p> <em>Главная / Прайс-лист </em> </p>
                </div>
            </section>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>Прайс-лист</h1>
                </div>
            </div>
        </section>
         @if($ShowPriceList == '[]')
          <div class="bigContainer">
               <h2 class="text_hidden_center">В настоящее время у нас нет прайс-листа</h2>
            </div>
         @else 
        <section>
            <table class="table smallContainer">
                <thead class="thead">
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Ед.изм.</th>
                        <th scope="col">Цена(ед.)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ShowPriceList as $value)
                    <tr>
                        <th scope="row" style="color: {{$value->color1}};">{{ $value->pricelist1 }}</th>
                        <td style="color: {{$value->color2}};" >{{ $value->pricelist2 }}</td>
                        <td style="color: {{$value->color3}};">{{ $value->pricelist3 }}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </section>
         @endif
              @include('include.defualt.vapros')
  @endsection  





@yield('footer')