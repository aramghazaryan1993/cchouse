@extends('layouts.app_cchous')

@section('title', 'Доставка материалов')

@yield('header')

  @section('content')
                    <section>
            <section>
                <div class="bigContainer under_nav">
                    <div class="logo_black">
                        <img src="assets/img/logo.svg" alt="logo">
                    </div>
                    <p> <em>Главная / Услуги / Доставка Материалов</em> </p>
                </div>
            </section>
        </section>
              @include('include.uslugi.UslugiMenu')
        <section>
            <div class="serviceblock">
                <div class="d-flex justify-content-center align-item-center">
                    <div class="bigContainer  ">
                        <div class="servic_block">
                            <p>@foreach($ShowUslugiRemont as $value) {{ $value->text }} @endforeach <br>
                                <span class="line"> </span>
                            </p>
                            <div class="service_block_imag">
                                <img src="{{ asset('assets/img/gruz.jpg') }}" alt="bg-img">
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
                                            <input type="text" placeholder="Ваше имя" id="name" name="name" required> <br>
                                            <input type="hidden"  name="segment" value="{{ Request::url() }}">
                                            <label for="tel"> Телефон <span>*</span></label>
                                            <input type="text" name="phone"  onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43' placeholder="+7 (___) ___-__-__" id="tel" required>
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
                    <h1>@foreach($ShowUslugiRemont as $value) {{ $value->remont1 }} @endforeach</h1>
                    <p>@foreach($ShowUslugiRemont as $value) {{ $value->remont2 }} @endforeach</p>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class=" three_box_change">
                    <div class="box_first">
                        <svg xmlns="http://www.w3.org/2000/svg" width="114.986" height="85.341" viewBox="0 0 114.986 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <g id="delivery-truck" class="cls-1" transform="translate(0 0)">
                                <path id="Path_210" data-name="Path 210" d="M105.547,40.569,101.675,25.08a6.735,6.735,0,0,0-4.655-11.6H79.053V6.738A6.745,6.745,0,0,0,72.316,0H6.738A6.745,6.745,0,0,0,0,6.738V65.129a6.745,6.745,0,0,0,6.737,6.737h8.085a13.475,13.475,0,0,0,26.95,0H83.545a13.475,13.475,0,1,0,26.95,0c0-.128-.006-.255-.01-.383a6.748,6.748,0,0,0,4.5-6.354V51.654a11.246,11.246,0,0,0-9.439-11.085ZM97.512,26.95l3.369,13.475H82.229l-3.176-3.177V26.95Zm1.754-6.737a2.247,2.247,0,0,1-2.246,2.246H79.053V17.967H97.02A2.248,2.248,0,0,1,99.266,20.213ZM28.3,80.85a8.983,8.983,0,1,1,8.983-8.983A8.994,8.994,0,0,1,28.3,80.85ZM41,67.375a13.475,13.475,0,0,0-25.409,0H6.738a2.248,2.248,0,0,1-2.246-2.246V6.738A2.248,2.248,0,0,1,6.738,4.492H72.316a2.248,2.248,0,0,1,2.246,2.246V67.375ZM97.02,80.85A8.983,8.983,0,1,1,106,71.867,8.994,8.994,0,0,1,97.02,80.85Zm12.544-13.9a13.475,13.475,0,0,0-25.249.429H79.053V44.917h24.7c2.927,0,5.277,2.83,5.807,4.125a28.291,28.291,0,0,1,.931,4.858V65.129a2.245,2.245,0,0,1-.931,1.817Zm0,0" />
                                <path id="Path_211" data-name="Path 211" d="M106.212,60a20.212,20.212,0,1,0,20.212,20.212A20.236,20.236,0,0,0,106.212,60Zm0,35.933a15.721,15.721,0,1,1,15.721-15.721A15.739,15.739,0,0,1,106.212,95.933Zm0,0" transform="translate(-66.686 -46.525)" />
                                <path id="Path_212" data-name="Path 212" d="M177.229,108.983h-6.737v-6.737a2.246,2.246,0,1,0-4.492,0v8.983a2.246,2.246,0,0,0,2.246,2.246h8.983a2.246,2.246,0,1,0,0-4.492Zm0,0" transform="translate(-128.719 -77.542)" />
                            </g>
                        </svg>
                        <p class="text_second">@foreach($ShowUslugiRemont as $value) {{ $value->remont3 }} @endforeach</p>
                    </div>
                    <div class="box_second">
                        <svg xmlns="http://www.w3.org/2000/svg" width="82.487" height="85.341" viewBox="0 0 82.487 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <g id="clock" class="cls-1" transform="translate(-3.404)">
                                <path id="Path_213" data-name="Path 213" d="M83.375,5H66.891V2.516a2.516,2.516,0,0,0-5.031,0V5h-14.7V2.516a2.516,2.516,0,0,0-5.031,0V5H28.059V2.516a2.516,2.516,0,0,0-5.031,0V5H5.92A2.516,2.516,0,0,0,3.4,7.513V64.355A2.516,2.516,0,0,0,5.92,66.871H21.36a23.915,23.915,0,0,0,46.574,0h15.44a2.516,2.516,0,0,0,2.516-2.516V7.513A2.515,2.515,0,0,0,83.375,5ZM23.028,10.028V12.3a2.516,2.516,0,1,0,5.031,0V10.028H42.132V12.3a2.516,2.516,0,0,0,5.031,0V10.028h14.7V12.3a2.516,2.516,0,0,0,5.031,0V10.028H80.86V20.316H8.435V10.028ZM44.647,80.31a18.89,18.89,0,1,1,18.89-18.89,18.911,18.911,0,0,1-18.89,18.89ZM68.558,61.84c0-.14.01-.279.01-.419a23.921,23.921,0,1,0-47.842,0c0,.14.008.279.01.419H8.435V25.348H80.859V61.84h-12.3Z" />
                                <path id="Path_214" data-name="Path 214" d="M100.8,127.664v-12.17a2.516,2.516,0,1,0-5.031,0v13.212a2.517,2.517,0,0,0,.737,1.779l5.782,5.782a2.516,2.516,0,0,0,3.558-3.558Z" transform="translate(-53.639 -65.609)" />
                            </g>
                        </svg>
                        <p class="text_second">@foreach($ShowUslugiRemont as $value) {{ $value->remont4 }} @endforeach</p>
                    </div>
                    <div class="box_third ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71.71" height="85.342" viewBox="0 0 71.71 85.342">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <g id="security" class="cls-1" transform="translate(-17.112 0)">
                                <path id="Path_10" data-name="Path 10" d="M88.73,21.974c-.044-2.3-.086-4.481-.086-6.586A2.987,2.987,0,0,0,85.657,12.4c-12.775,0-22.5-3.671-30.609-11.554a2.986,2.986,0,0,0-4.165,0C42.776,8.729,33.051,12.4,20.277,12.4a2.987,2.987,0,0,0-2.987,2.987c0,2.106-.041,4.284-.086,6.588-.409,21.442-.97,50.808,34.783,63.2a2.984,2.984,0,0,0,1.956,0C89.7,72.784,89.139,43.417,88.73,21.974ZM52.965,79.185c-30.663-11.139-30.2-35.54-29.788-57.1.025-1.294.049-2.547.065-3.777,11.965-.505,21.532-4.131,29.723-11.266,8.191,7.135,17.76,10.761,29.726,11.266.017,1.229.041,2.482.065,3.775C83.168,43.643,83.631,68.045,52.965,79.185Z" transform="translate(0 0)" />
                                <path id="Path_11" data-name="Path 11" d="M94.178,79.76,79.761,94.177l-6.152-6.152a2.987,2.987,0,0,0-4.224,4.225l8.264,8.264a2.988,2.988,0,0,0,4.224,0L98.4,83.985a2.987,2.987,0,1,0-4.224-4.225Z" transform="translate(-30.926 -47.466)" />
                            </g>
                        </svg>
                        <p class="text_second">@foreach($ShowUslugiRemont as $value) {{ $value->remont5 }} @endforeach </p>
                    </div>
                    <div class="box_third">
                        <svg xmlns="http://www.w3.org/2000/svg" width="85.354" height="85.341" viewBox="0 0 85.354 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <g id="paint-bucket" class="cls-1" transform="translate(-0.001 -0.5)">
                                <path id="Path_215" data-name="Path 215" d="M53.5,1.4C46.945-.322,41.267.444,37.313,3.546l-.021-.113L24.473,5.858c-10.206,1.93-17.982,10-18.91,19.629a21.958,21.958,0,0,0,.712,8.139L4.09,35.8C.13,39.756-1,45.924.9,53.162c1.78,6.765,6.051,13.781,12.025,19.755s12.99,10.245,19.755,12.025c6.148,1.618,12.842,1.33,17.358-3.179L61.005,70.975v2.2A12.462,12.462,0,0,0,75.4,85.668c6.145-1,9.941-6.814,9.941-13.032V40.055c.334-8.776-4.179-18.726-12.081-26.627C67.282,7.454,60.267,3.183,53.5,1.4ZM10.539,25.967c.716-7.428,6.829-13.677,14.863-15.2l4.8-.909L10.542,29.389a17.412,17.412,0,0,1,0-3.422Zm35.99,52.239-.014.014c-5.749,5.749-19.511,1.7-30.05-8.838C11.106,64.024,7.3,57.812,5.739,51.89c-1.434-5.448-.764-9.908,1.88-12.552l.779-.774a21.225,21.225,0,0,0,17.06,10.361,7.508,7.508,0,1,0,.027-5.008A16.185,16.185,0,0,1,12.1,34.89L32.053,15.074a24.558,24.558,0,0,0,.9,6.646c1.77,6.589,6.039,13.512,12.022,19.495L58.787,55.028a7.576,7.576,0,0,1,2.219,5.313v3.621ZM30.772,44.69a2.5,2.5,0,1,1,0,3.535A2.5,2.5,0,0,1,30.772,44.69ZM80.338,72.636c0,3.559-1.973,7.484-5.744,8.1a7.466,7.466,0,0,1-8.589-7.562V60.34a12.609,12.609,0,0,0-3.684-8.848S47.216,36.351,46.609,35.673H73.482a6.468,6.468,0,0,1,4.678,1.885,7.843,7.843,0,0,1,2.178,5.626V72.636ZM73.486,30.673H42.691C36.677,21.8,35.172,12.624,39.671,8.124c5.75-5.749,19.511-1.7,30.051,8.839a38.116,38.116,0,0,1,9.49,15.18,11.692,11.692,0,0,0-5.726-1.47Zm0,0" transform="translate(0 0)" />
                            </g>
                        </svg>
                        <p class="text_second">@foreach($ShowUslugiRemont as $value) {{ $value->remont6 }} @endforeach</p>
                    </div>
                </div>
            </div>
        </section>
             @include('include.defualt.vapros')
  @endsection  





@yield('footer')