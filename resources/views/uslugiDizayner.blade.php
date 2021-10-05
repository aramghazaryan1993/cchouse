@extends('layouts.app_cchous')

@section('title', 'Услуги дизайнера')

@yield('header')

  @section('content')
        <section>
            <section>
                <div class="bigContainer under_nav">
                    <div class="logo_black">
                        <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
                    </div>
                    <p> <em>Главная / Услуги / Услуги Дизайнера</em> </p>
                </div>
            </section>
        </section>
             @include('include.uslugi.UslugiMenu')
        <section>
            <div class="serviceblock">
                <div class="d-flex justify-content-center align-item-center">
                    <div class="bigContainer  ">
                        <div class="servic_block">
                            <p>@foreach($ShowDizayner as $value) {{ $value->dizayner1 }} @endforeach<br>
                                <span class="line"> </span>
                            </p>
                            <div class="service_block_imag">
                                <img src="{{ asset('assets/img/second.png') }}" alt="bg-img">
                            </div>
                        </div>
                        <div class="bigContainer  ">
                            <div lass="d-flex justify-content-center align-item-center">
                                <div class="white_block">
                                    <img src="{{ asset('assets/img/pen.svg') }}" alt="imag">
                                    <p>Оформите заявку на услугу, мы свяжемся с вами в ближайшее время и ответим на все интересующие вопросы.</p>
                                    <button class="order fancybox" href="#one">Оставить заявку</button>
                                    <div id="one" style="display:none" class="modal_block">
                                        <h4>Оставить заявку</h4>
                                        <p>Представьтесь, мы вам перезвоним.</p>
                                        <form action="{{ route('send zayavku email') }}" method="post">
                                            @csrf
                                            <label for="name"> Ваше имя<span>*</span></label>
                                            <input name="name" type="text" placeholder="Ваше имя" id="name" required> <br>
                                            <input type="hidden"  name="segment" value="{{ Request::url() }}">
                                            <label for="tel"> Телефон <span>*</span></label>
                                            <input name="phone" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43' placeholder="+7 (___) ___-__-__" id="tel" required>
                                            <p class="mt-3"><span>*</span> - обязательные для заполнения поля</p>
                                            <div class="d-flex modal_check">
                                                <input name="yes" type="checkbox" clsss="chek1" required>
                                                <label for="chek" class="ml-1">Я согласен на
                                                    <a href="{{ route('contract view') }}">обработку персональных данных
                                                    </a></label>
                                            </div>
                                            <button type="submit"> Отправить</button>
                                        </form>
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>@foreach($ShowDizayner as $value) {{ $value->dizayner2 }} @endforeach</h1>
                    <p>@foreach($ShowDizayner as $value) {{ $value->dizayner3 }} @endforeach</p>
                </div>
            </div>
        </section>
        @if(count($ShowDizaynerImg) == '[]')
        <div class="bigContainer">
               <h2 class="text_hidden_center">На данный момент у нас нет дизайнерских пакетов</h2>
         </div>
        @endif
        <section>
            <div class="bigContainer">
                <div class="big_card">
                    @foreach($ShowDizaynerImg as $value)
                    <div class="cards fancybox" href="#one{{ $value->id }}">
                        <div class="card_img">
                            <img src="{{asset('uplodImage/uslugi_dizayner/'.$value->img)}}" alt="imag">
                        </div>
                        <div class="card_content">
                            <h4>{{ $value->title1 }}</h4>
                            <p> {{ $value->title2 }}</p>
                        </div>
                        <div id="one{{ $value->id }}" style="display:none" class=" modal-content">
                            <h4 class="modal-header">Состав пакета:</h4>
                            <div class="modal-body">
                                 @foreach($DataUslugiDizaynerText->where('imgid', '=', $value->id) as $val)<p>{{ $val->text }}</p> @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
           @include('include.defualt.vapros')
  @endsection  





@yield('footer')