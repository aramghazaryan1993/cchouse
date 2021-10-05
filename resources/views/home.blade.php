@extends('layouts.app_cchous_home')

@section('title', 'Ремонт квартир')

@yield('header')

  @section('content')
  

     <section>
            <div class="backgroundimg">
                <div class="main_back">
                    <img src="assets/img/newroom.jpg" alt="bg-img">
                </div>
                <div class="bg_cover">
                    <div class="bigContainer d-flex justify-content-between">
                        <div>
                            <div class="logo">
                                <img src="assets/img/logo1.svg" alt="logo">
                            </div>
                            <h1>@foreach($showHome as $value) {{ $value->home1 }}  @endforeach</h1>
                            <p>
                                @foreach($showHome as $value) {{ $value->home2 }}  @endforeach
                            </p>
                            <div class=" mainbtn">
                                
                                <a href="{{ route('uslugi remont view') }}" class="text_decor"><button class="mr-3 button1 " style="color: #ffffff">Подробнее</button></a>
                                <button href="#one" class="fancybox button2 " style="color: #ffffff">Оставить заявку</button>
                                <div id="one" style="display:none" class="modal_block">
                                    <h4>Оставить заявку</h4>
                                    <p>Представьтесь, мы вам перезвоним.</p>
                                    <form action="{{ route('send zayavku email') }}" method="post" >
                                        @csrf
                                        <label for="name"> Ваше имя<span>*</span></label>
                                        <input name="name" type="text" placeholder="Ваше имя" id="name" required> <br>
                                        <label for="tel"> Телефон <span>*</span></label>
                                        <input type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43' placeholder="+7 (___) ___-__-__" id="tel" required>
                                        <p class="mt-3"><span>*</span> - обязательные для заполнения поля</p>
                                        <div class="d-flex modal_check">
                                            <input name="yes" type="checkbox" clsss="chek1" required>
                                            <label for="chek" class="ml-1">Я согласен на 
                                                <a href="{{ route('contract view') }}" >обработку персональных данных
                                            </a></label>
                                        </div>
                                      
                                        <button type="submit"  > Отправить</button>
                                        
                                          
                                        
                                       
                                    </form>
                                     
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                         
                        <div class=" social ">
                            <div>
                                <a href="@foreach($showHome as $value) {{ $value->youtube }} @endforeach">Youtube</a>
                            </div>
                            <div>
                                <a href="@foreach($showHome as $value) {{ $value->instagram }} @endforeach"> Instagram</a>
                            </div>
                            <div>
                                <a href="@foreach($showHome as $value) {{ $value->facebook }} @endforeach"> Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
        <section>
            <div class="bigContainer">
                <div class="service">
                    <h2>@foreach($showHome as $value) {{ $value->home3 }} @endforeach</h2>
                </div>
            </div>
        </section>
       
        <section>
            <div class="block">
                <div class="bigContainer">
                    <div class="box1 first_block">
                        <div class="kvartira">
                            <div class="text_hidden">
                                <p class="littltext">Ремонт</p>
                                <h3 class="medium_text">Квартир</h3>
                            </div>
                            <p class="big_text">@foreach($ShowRemont as $value) {{  str_limit($value->remont1, 85) }} @endforeach</p>
                            <div class="hidimg" style="display: none">
                                <img src="assets/img/bg-img.png" alt="bg-img">
                            </div>
                            <a href="{{ route('uslugi remont view') }}"  class="big_decor"><button>Подробнее</button></a>
                        </div>
                        <div class="kvartiraimg">
                            <img src="{{ asset('assets/img/bg-img.png') }}" alt="bg-img">
                        </div>
                    </div>
                </div>
                <div class="bigContainer desine_block">
                    <div class="box1">
                        <div class="designe">
                            <img src="assets/img/second.png" alt="img">
                        </div>
                        <div class="kvartira kvartira_middle">
                            <div class="text_hidden">
                                <p class="littltext">Услуги</p>
                                <h3 class="medium_text">Дизайнера</h3>
                            </div>
                            <p class="big_text  ">@foreach($ShowDizayner as $value) {{  str_limit($value->dizayner1, 82) }} @endforeach</p>
                            <div class="hidimg" style="display: none">
                                <img src="{{ asset('assets/img/second.png') }}" alt="bg-img">
                            </div>
                            <a href="{{ route('uslugi dizayner view') }}"  class="big_decor"><button>Подробнее</button></a>
                        </div>
                    </div>
                </div>
                <div class="bigContainer desine_block">
                    <div class="box1">
                        <div class="kvartira">
                            <div class="text_hidden">
                                <p class="littltext">Доставка</p>
                                <h3 class="medium_text">Материалов</h3>
                            </div>
                            <p class="big_text">@foreach($ShowDastavka as $value) {{  str_limit($value->text, 85) }} @endforeach</p>
                            <div class="hidimg" style="display: none">
                                <img src="{{ asset('assets/img/third.png') }}" alt="bg-img">
                            </div>
                            <a href="{{ route('uslugi dastavka view') }} "  class="big_decor"><button>Подробнее</button></a>
                        </div>
                        <div class="kvartiraimg">
                            <img src="{{ asset('assets/img/third.png') }}" alt="bg-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <h2 class="your_choice">@foreach($showHome as $value) {{ $value->home4 }} @endforeach</h2>
            </div>
        </section>
           
        <section>
            <div class="bigContainer">
                <div class="three_icons">
                    <div class="main_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="114.74" height="136.519" viewBox="0 0 114.74 136.519">
                            <defs>
                                <style>
                                    .cls-1 {
                                    opacity: 0.07;
                                }

                                .cls-2 {
                                    fill: #858585;
                                }
                                </style>
                            </defs>
                            <g id="security" class="cls-1" transform="translate(-17.112 0)">
                                <path id="Path_10" data-name="Path 10" class="cls-2" d="M131.7,35.151c-.07-3.686-.137-7.168-.137-10.536a4.779,4.779,0,0,0-4.78-4.778c-20.441,0-36-5.873-48.977-18.483a4.779,4.779,0,0,0-6.664,0C58.176,13.964,42.615,19.837,22.176,19.837a4.779,4.779,0,0,0-4.78,4.778c0,3.369-.066,6.852-.137,10.539-.655,34.3-1.552,81.277,55.655,101.1a4.775,4.775,0,0,0,3.13,0C133.256,116.43,132.36,69.453,131.7,35.151ZM74.48,126.67C25.417,108.851,26.159,69.817,26.817,35.336c.04-2.069.078-4.075.1-6.041,19.144-.808,34.453-6.608,47.558-18.021C87.586,22.687,102.9,28.488,122.043,29.295c.027,1.966.065,3.97.1,6.038C122.805,69.815,123.546,108.85,74.48,126.67Z" transform="translate(0 0)" />
                                <path id="Path_11" data-name="Path 11" class="cls-2" d="M109.922,80.3l-23.26,23.259L76.736,93.63a4.819,4.819,0,0,0-6.815,6.816l13.333,13.333a4.82,4.82,0,0,0,6.815,0l26.667-26.666a4.819,4.819,0,1,0-6.814-6.816Z" transform="translate(-18.846 -28.778)" />
                            </g>
                        </svg>
                        <div class="promises">
                            <h3>@foreach($showHome as $value) {{ $value->home5 }} @endforeach</h3>
                            <p>@foreach($showHome as $value) {{ $value->home6 }} @endforeach</p>
                        </div>
                    </div>
                  
                    <div class="main_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="124.305" height="136.519" viewBox="0 0 124.305 136.519">
                            <defs>
                                <style>
                                    .cls-1 {
                                    opacity: 0.07;
                                }

                                .cls-2 {
                                    fill: #858585;
                                }
                                </style>
                            </defs>
                            <g id="clockwise-rotation" class="cls-1" transform="translate(-3.832 0)">
                                <g id="Layer_2_19_" transform="translate(3.832 0)">
                                    <g id="Group_145" data-name="Group 145" transform="translate(0 0)">
                                        <path id="Path_216" data-name="Path 216" class="cls-2" d="M133.766,45.6a5.4,5.4,0,0,0-10.1,3.821,56.326,56.326,0,0,1-74.88,71.7,56.81,56.81,0,0,1-11.184-6.374A56.328,56.328,0,0,1,91.393,16.876l-3.825,6.46c-1.051,1.775-.243,2.959,1.791,2.63l18.172-2.934a3.021,3.021,0,0,0,2.448-4.133L103.815,1.553c-.69-1.943-2.116-2.082-3.165-.307L96.961,7.474a67.117,67.117,0,0,0-88.3,86.8,66.677,66.677,0,0,0,22.545,29.179,67.612,67.612,0,0,0,13.327,7.595A67.121,67.121,0,0,0,133.766,45.6Z" transform="translate(-3.832 0)" />
                                        <path id="Path_217" data-name="Path 217" class="cls-2" d="M217.354,90.917a4.37,4.37,0,0,0-4.37,4.37v43.544l39.825,20.587a4.371,4.371,0,0,0,5.889-1.876,4.371,4.371,0,0,0-1.877-5.89L221.726,133.51V95.287A4.37,4.37,0,0,0,217.354,90.917Z" transform="translate(-152.569 -64.655)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="promises">
                            <h3>@foreach($showHome as $value) {{ $value->home7 }} @endforeach</h3>
                            <p>@foreach($showHome as $value) {{ $value->home8 }} @endforeach</p>
                        </div>
                    </div>
                    <div class="main_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="114.99" height="136.519" viewBox="0 0 114.99 136.519">
                            <defs>
                                <style>
                                    .cls-1 {
        opacity: 0.07;
      }

      .cls-2 {
        fill: #858585;
      }
    </style>
                            </defs>
                            <g id="placeholder_2_" data-name="placeholder (2)" class="cls-1" transform="translate(-76)">
                                <g id="Group_147" data-name="Group 147" transform="translate(76)">
                                    <g id="Group_146" data-name="Group 146" transform="translate(0)">
                                        <path id="Path_218" data-name="Path 218" class="cls-2" d="M123.995,0A48,48,0,0,0,83.164,73.233l38.1,61.4a4,4,0,0,0,3.4,1.891h.032a4,4,0,0,0,3.4-1.944l37.127-61.99A48.005,48.005,0,0,0,123.995,0Zm34.361,68.478L124.6,124.836,89.963,69.018a40.022,40.022,0,1,1,68.392-.541Z" transform="translate(-76)" />
                                    </g>
                                </g>
                                <g id="Group_149" data-name="Group 149" transform="translate(99.997 23.997)">
                                    <g id="Group_148" data-name="Group 148">
                                        <path id="Path_219" data-name="Path 219" class="cls-2" d="M190,90a24,24,0,1,0,24,24A24.025,24.025,0,0,0,190,90Zm0,40.049A16.052,16.052,0,1,1,206.022,114,16.064,16.064,0,0,1,190,130.049Z" transform="translate(-166 -90)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="promises">
                            <h3>@foreach($showHome as $value) {{ $value->home9 }} @endforeach</h3>
                            <p>@foreach($showHome as $value) {{ $value->home10 }} @endforeach</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <h2 class="your_choice">Отзывы клиентов</h2>
            </div>
        </section>
        <section>
            <div class="swiper-container swiper-container1">
                <div class="swiper-wrapper">
                  @foreach($ShowOtzive as $value) 
                    <div class="swiper-slide">
                        <div class="slide_content">
                            <img src="{{asset('uplodImage/otziv/'.$value->img)}}" alt="img">
                            <h3>{{ $value->name }}</h3>
                        </div>
                        <p>{{  str_limit($value->text, 240) }}</p>
                        <input type="hidden" value="{{ $value->star }}" class="starColor">
                        <div class="banner_star ">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                            </svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                            </svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                            </svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                <g>
                                    <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                </g>
                            </svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                <g>
                                    <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
  @endsection  





@yield('footer')
