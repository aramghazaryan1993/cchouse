@extends('layouts.app_cchous')

@section('title', 'Ремонт квартир под ключ')

@yield('header')

  @section('content')
                      <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="assets/img/logo.svg" alt="logo">
                </div>
                <p> <em>Главная / Услуги / Ремонт Квартир Под Ключ</em> </p>
            </div>
        </section>
             @include('include.uslugi.UslugiMenu')
        <section>
            <div class="serviceblock">
                <div class="d-flex justify-content-center align-item-center">
                    <div class="bigContainer  ">
                        <div class="servic_block">
                            <p>@foreach($ShowRemont as $value) {{ $value->remont1 }} @endforeach<br>
                                <span class="line"> </span>
                            </p>
                            <div class="service_block_imag">
                                <img src="{{ asset('assets/img/bg-img.png') }}" alt="bg-img">
                            </div>
                        </div>
                        <div class="bigContainer  ">
                            <div lass="d-flex justify-content-center align-item-center">
                                <div class="white_block">
                                    <img src="assets/img/pen.svg" alt="imag">
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
                    <h1>@foreach($ShowRemont as $value) {{ $value->remont2 }} @endforeach</h1>
                    <p>@foreach($ShowRemont as $value) {{ $value->remont3 }} @endforeach</p>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="three_box">
                    <div class="box_first">
                        <svg xmlns="http://www.w3.org/2000/svg" width="84.485" height="85.341" viewBox="0 0 84.485 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;

      }

      .cls-2 {
        fill: #141414;
      }
    </style>
                            </defs>
                            <g id="wallet" class="cls-1" transform="translate(-1.681)">
                                <path id="Path_179" data-name="Path 179" class="cls-2" d="M86.166,39.756H82.071V20.92a8.2,8.2,0,0,0-8.189-8.189H68.336l-5.675-10.2A4.913,4.913,0,0,0,55.979.619L34.2,12.731H9.87A8.2,8.2,0,0,0,1.681,20.92V77.152A8.2,8.2,0,0,0,9.87,85.341H73.882a8.2,8.2,0,0,0,8.189-8.189V60.638h4.095V39.756ZM73.882,16.007a4.9,4.9,0,0,1,4.859,4.368H72.586l-2.427-4.368ZM57.572,3.482a1.669,1.669,0,0,1,2.226.636l9.041,16.256H27.2ZM78.8,77.152a4.92,4.92,0,0,1-4.914,4.914H9.87a4.92,4.92,0,0,1-4.914-4.914V20.92A4.92,4.92,0,0,1,9.87,16.007H28.309l-7.855,4.368h-9.56a1.638,1.638,0,1,0,0,3.276H78.8V39.757H66.818A10.1,10.1,0,0,0,56.729,49.846v.7A10.1,10.1,0,0,0,66.818,60.64H78.8V77.152Zm4.095-19.79H66.818A6.821,6.821,0,0,1,60,50.549v-.7a6.821,6.821,0,0,1,6.814-6.814H82.89ZM71.835,50.331a3.616,3.616,0,1,1-3.616-3.616A3.615,3.615,0,0,1,71.835,50.331Z" transform="translate(0 0)" />
                            </g>
                        </svg>
                        <h4>@foreach($ShowRemont as $value) {{ $value->remont4 }} @endforeach</h4>
                        <p>@foreach($ShowRemont as $value) {{ $value->remont5 }} @endforeach </p>
                    </div>
                    <div class="box_second">
                        <svg xmlns="http://www.w3.org/2000/svg" width="94.526" height="85.341" viewBox="0 0 94.526 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <g id="policy" class="cls-1" transform="translate(0)">
                                <path id="Path_180" data-name="Path 180" d="M84.558,0H23.434a9.583,9.583,0,0,0-9.62,9.514l-.394,53.823H1.491A1.552,1.552,0,0,0,0,64.929v7.407A12.979,12.979,0,0,0,12.246,85.252v.089H63.718v-.1c.383.016.614.1.878.1h.037A12.939,12.939,0,0,0,77.5,72.335V25.258H93.034a1.568,1.568,0,0,0,1.491-1.61V10.057A10.04,10.04,0,0,0,84.557,0ZM12.915,82.28h-.01a9.92,9.92,0,0,1-9.844-9.945V66.4h48.6V72.31A12.956,12.956,0,0,0,55.446,81.5a5.5,5.5,0,0,1,.806.777Zm61.519-9.946a9.885,9.885,0,0,1-9.8,9.946H64.6a9.946,9.946,0,0,1-9.874-9.97V64.929a1.586,1.586,0,0,0-1.531-1.593H16.481l.394-53.812a6.521,6.521,0,0,1,6.559-6.462h53.9a10.445,10.445,0,0,0-2.9,7.037Zm17.03-62.249V22.2H77.5V10.1a7.089,7.089,0,0,1,7.017-7.034h.043a6.978,6.978,0,0,1,6.909,7.011Zm0,0" />
                                <path id="Path_181" data-name="Path 181" d="M167.753,81l7.892,5.4a1.507,1.507,0,0,0,1.711,0L185.225,81a11.889,11.889,0,0,0,4.752-9.07V61.017a1.5,1.5,0,0,0-.816-1.375l-12.017-5.911a1.5,1.5,0,0,0-1.338,0l-11.994,5.894A1.494,1.494,0,0,0,163,61V71.934A11.89,11.89,0,0,0,167.753,81Zm-1.694-19.047,10.428-5.145,10.428,5.16v9.964a8.821,8.821,0,0,1-3.418,6.539l-7.028,4.807-7-4.806a8.817,8.817,0,0,1-3.41-6.539Zm0,0" transform="translate(-131.807 -43.323)" />
                                <path id="Path_182" data-name="Path 182" d="M205.067,124.831a1.529,1.529,0,0,0,1.084.459h0a1.533,1.533,0,0,0,1.082-.453l6.09-6.092a1.531,1.531,0,0,0-2.165-2.167l-5,5-2-2.019a1.532,1.532,0,0,0-2.176,2.156Zm0,0" transform="translate(-162.977 -93.909)" />
                                <path id="Path_183" data-name="Path 183" d="M171.27,248H134.531a1.531,1.531,0,1,0,0,3.062H171.27a1.531,1.531,0,1,0,0-3.062Zm0,0" transform="translate(-107.551 -200.546)" />
                                <path id="Path_184" data-name="Path 184" d="M171.27,285H134.531a1.531,1.531,0,1,0,0,3.062H171.27a1.531,1.531,0,1,0,0-3.062Zm0,0" transform="translate(-107.551 -230.466)" />
                            </g>
                        </svg>
                        <h4>@foreach($ShowRemont as $value) {{ $value->remont6 }} @endforeach</h4>
                        <p>@foreach($ShowRemont as $value) {{ $value->remont7 }} @endforeach </p>
                    </div>
                    <div class="box_third">
                        <svg xmlns="http://www.w3.org/2000/svg" width="85.339" height="85.341" viewBox="0 0 85.339 85.341">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.8;
      }
    </style>
                            </defs>
                            <path id="living-room" class="cls-1" d="M81.08,49.783H76.813V35.56A7.12,7.12,0,0,0,69.7,28.448H46.944a7.12,7.12,0,0,0-7.112,7.112V49.783H35.565A4.272,4.272,0,0,0,31.3,54.05V68.273a7.1,7.1,0,0,0,6.661,7.066L35.915,82.5H22.621a7.124,7.124,0,0,0-6.968-5.689H12.809V11.323a8.48,8.48,0,0,1,16.874-1.2l.025.173a4.241,4.241,0,0,0-2.565,4.639l.388,2.3-3.8,6.531a2.846,2.846,0,0,0,2.447,4.278A2.888,2.888,0,0,0,26.66,28l13.645-2.306a2.844,2.844,0,0,0,1.378-4.964l-5.738-4.919-.388-2.3a4.258,4.258,0,0,0-3-3.363L32.5,9.722a11.324,11.324,0,0,0-22.535,1.6V76.807H7.12V75.385a1.422,1.422,0,1,0-2.845,0V77.41A7.117,7.117,0,0,0,.008,83.918,1.422,1.422,0,0,0,1.43,85.34H83.924a1.422,1.422,0,0,0,0-2.845H80.73l-2.045-7.157a7.1,7.1,0,0,0,6.661-7.066V54.05a4.272,4.272,0,0,0-4.267-4.267ZM39.831,22.889,26.186,25.2l3.727-6.4,4.3-.726,5.633,4.817Zm-6.842-7.5-2.8.474-.238-1.4a1.424,1.424,0,0,1,1.165-1.639,1.459,1.459,0,0,1,.238-.02,1.426,1.426,0,0,1,1.4,1.185Zm13.955,15.9H69.7a4.272,4.272,0,0,1,4.267,4.267V50.045a4.258,4.258,0,0,0-2.845,4v2.881a7.042,7.042,0,0,0-4.267-1.459h-5.1l3.261-3.261A1.422,1.422,0,0,0,63.006,50.2l-3.261,3.261V46.938a1.423,1.423,0,0,0-2.845,0v6.523L53.639,50.2a1.422,1.422,0,0,0-2.011,2.011l3.261,3.261h-5.1a7.042,7.042,0,0,0-4.267,1.459V54.05a4.258,4.258,0,0,0-2.845-4V35.56a4.272,4.272,0,0,1,4.267-4.267ZM66.856,58.317a4.272,4.272,0,0,1,4.267,4.267v1.422h-25.6V62.584a4.272,4.272,0,0,1,4.267-4.267Zm2.02,17.068L72.94,82.5H43.706l4.063-7.111Zm2.248-2.845h-25.6V66.85h25.6Zm-36.98-4.267V54.05a1.424,1.424,0,0,1,1.422-1.423h5.69a1.424,1.424,0,0,1,1.422,1.423V72.539H38.41a4.271,4.271,0,0,1-4.267-4.267ZM3.1,82.5a4.274,4.274,0,0,1,4.023-2.845h8.534A4.274,4.274,0,0,1,19.676,82.5Zm35.777,0,2.032-7.111h3.588L40.43,82.5Zm37.341,0-4.063-7.111h3.588L77.771,82.5ZM82.5,68.273a4.271,4.271,0,0,1-4.267,4.267H73.968V54.05a1.424,1.424,0,0,1,1.422-1.423h5.69A1.425,1.425,0,0,1,82.5,54.05Zm0,0" transform="translate(-0.008 0.001)" />
                        </svg>
                        <h4>@foreach($ShowRemont as $value) {{ $value->remont8 }} @endforeach</h4>
                        <p>@foreach($ShowRemont as $value) {{ $value->remont9 }} @endforeach </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h2>@foreach($ShowRemont as $value) {{ $value->remont10 }} @endforeach</h2>
                    <p>@foreach($ShowRemont as $value) {{ $value->remont11 }} @endforeach</p>
                </div>
            </div>
        </section>
        <section>
            @if(count($ShowImageRemont) == '[]')
            <div class="bigContainer">
                 <h2 class="text_hidden_center">На данный момент у нас нет примеров случаев</h2>
             </div>
            @else
            <div class="swiper-container swiper-container2">
                <div class="swiper-wrapper">
                    @foreach($ShowImageRemont as $value)
                    <div class="swiper-slide">
                        <img src="{{asset('uplodImage/uslugi_remont/'.$value->img)}}" alt="banner">
                    </div>
                   @endforeach
                </div>
                
                <div class="prevnext">
                    <div class="swiper-button-next">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 8.5L1 16" stroke="#C7CCD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L1 8.5L9 1" stroke="#C7CCD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                 <div class="swiper-pagination"></div>
            </div>
            @endif
        </section>
               @include('include.defualt.vapros')
  @endsection  





@yield('footer')