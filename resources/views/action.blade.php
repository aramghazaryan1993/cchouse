@extends('layouts.app_cchous')

@section('title', 'Акции')

@yield('header')

  @section('content')
          <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
                </div>
                <p> <em>Главная / Акции </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>Акции</h1>
                </div>
                 @if($ShowAction == '[]')
                 <div class="bigContainer">
                    <h2 class ='text_hidden_center'>В настоящее время у нас нет скидок</h2>
                     </div>
                 @endif
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="big_card2">
                    
                @foreach($ShowAction as $value)
                    <div class="cards2 fancybox" href="#one{{ $value->id }}">
                        <div class="card_img2">
                            <img src="{{asset('uplodImage/action/'.$value->img)}}" alt="imag">
                        </div>
                        <div class="card_content">
                            <h4>{{ $value->action1 }}</h4>
                        </div>
                        <div id="one{{ $value->id }}" style="display:none">
                            <div class="action_modal ">
                                <div class="modal_img">
                                    <img src="{{asset('uplodImage/action/'.$value->img)}}" alt="imag">
                                </div>
                                <div class="action_modal_content">
                                    <h3>{{ $value->action2 }}</h3>
                                    <p class="first_p">{{ $value->action2 }}</p>
                                    <p class="second_p">{{ $value->text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </section>
  @endsection  





@yield('footer')