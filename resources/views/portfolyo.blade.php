@extends('layouts.app_cchous')

@section('title', 'Портфолио')

@yield('header')

  @section('content')
    <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
                </div>
                <p> <em>Главная / Портфолио </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>Портфолио</h1>
                </div>
            </div>
        </section>
        @if(count($ShowPortfolyo) == '[]')
               <div class="bigContainer " style="margin-bottom: 5rem">
                    <h2 class ='text_hidden_center '>В настоящее время у нас нет  портфолио</h2>
              </div>
          
        @else
        <section>
            <div class="bigContainer">
                <div class="cardBig">
                    @foreach($ShowPortfolyo as $value)
                    <div class="big_card">
                        <div class="card1">
                            @foreach($ShowPortfolyoImg->where('portfolyoid', '=', $value->id)->where('home', '=', 1) as $val)
                            <img src="{{asset('uplodImage/portfolyo/'.$val->img)}}" alt="img">
                            @endforeach
                            <div class="black">
                                <a href="{{ route('portfolyo photogallery view',['id' => $value->id]) }}">Смотреть Проект <span> &rarr; </span></a></div>
                        </div>
                        <div>
                            <p>{{ $value->portfolyo }}</p>
                        </div>
                    </div>
               @endforeach
                </div>
            </div>
        </section>
          <section>
            <div class="bigContainer">
                <div class="twobuttons">
                    <a href="{{ $ShowPortfolyo->previousPageUrl() }}"><button class="first_button"><span>&larr;</span>Предыдущий</button></a>
                    <a href="{{ $ShowPortfolyo->nextPageUrl() }}"><button class="second_button">Следующий  <span>&rarr; </span></button></a>
                </div>
            </div>
        </section>
        @endif
  @endsection  





@yield('footer')