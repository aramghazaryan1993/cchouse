@extends('layouts.app_cchous')

@section('title', 'Отзывы')

@yield('header')

  @section('content')
        <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="assets/img/logo.svg" alt="logo">
                </div>
                <p> <em>Главная / Отзывы</em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                @foreach($ShowOtziv as $value)
                <div class="title_text">
                    <h1>{{ $value->otziv1 }}</h1>
                    <p style="max-width: 700px">{{ $value->otziv2 }}</p>
                </div>
                @endforeach
            </div>
        </section>
        <section>
            <div class="bigContainer  ">
                <div class="big_comment">
                    @foreach($ShowOtzivList as $value)
                    <div class="comment_block ">
                        <div class="comment_img">
                            <img src="{{asset('uplodImage/otziv/'.$value->img)}}" alt="imag">
                        </div>
                        <div class="comment_content">
                            <div class="comment_header">
                                <h3>{{ $value->name }}</h3>
                                <input type="hidden" value="{{ $value->star }}" class="starColor">
                                <div class="comment_star banner_star">
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
                                        <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                    </svg>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                        <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="comment_second_block">
                                <p>{{ $value->text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="line_brack"></div>
                    @endforeach
                </div>
            </div>
        </section>
          <section>
             
              @if(count($ShowOtzivList) == '[]')
                 <div class="bigContainer">
                    <h2 class ='text_hidden_center'>В настоящее время у нас нет отзывов</h2>
                 </div>
               
              @else
            <div class="bigContainer">
                <div class="twobuttons">
                    <button class="first_button"><span>&larr;</span><a href="{{ $ShowOtzivList->previousPageUrl() }}">Предыдущий</a></button>
                    <button class="second_button"><a href="{{ $ShowOtzivList->nextPageUrl() }}">Следующий</a><span>&rarr; </span></button>
                </div>
            </div>
             @endif
        </section>
      
       
        <section>
            <div class="form_block">
                <div class="bigContainer">
                    <div class="title_text pt-5">
                        <h2> оставить отзыв</h2>
                    </div>
                    <form action="{{ route('otziv insert view') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form_group">
                            <div class="group">
                                <input type="text"  name="name" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-person-24px" class="cls-1">
                                            <path id="Path_292" data-name="Path 292" d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0,2c-2.67,0-8,1.34-8,4v2H20V18C20,15.34,14.67,14,12,14Z" />
                                            <path id="Path_293" data-name="Path 293" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Имя <span>*</span></label>
                            </div>
                            <div class="group">
                                <input type="tel"  required onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone">
                                <label class="maillabel">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-local_phone-24px" class="cls-1">
                                            <path id="Path_191" data-name="Path 191" class="cls-2" d="M0,0H24V24H0Z" />
                                            <path id="Path_192" data-name="Path 192" d="M6.62,10.79a15.149,15.149,0,0,0,6.59,6.59l2.2-2.2a.994.994,0,0,1,1.02-.24,11.407,11.407,0,0,0,3.57.57,1,1,0,0,1,1,1V20a1,1,0,0,1-1,1A17,17,0,0,1,3,4,1,1,0,0,1,4,3H7.5a1,1,0,0,1,1,1,11.36,11.36,0,0,0,.57,3.57,1,1,0,0,1-.25,1.02Z" />
                                        </g>
                                    </svg>
                                    Телефон <span>*</span></label>
                            </div>
                            <div class="group">
                                <input type="email" name="email" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-mail-24px" class="cls-1">
                                            <path id="Path_193" data-name="Path 193" d="M20,4H4A2,2,0,0,0,2.01,6L2,18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,20,4Zm0,4-8,5L4,8V6l8,5,8-5Z" />
                                            <path id="Path_194" data-name="Path 194" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Email <span>*</span></label>
                            </div>
                        </div>
                        <div class="form_group2">
                            <div class="group">
                                <input type="textarea"  name="text" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-create-24px" class="cls-1">
                                            <path id="Path_195" data-name="Path 195" d="M3,17.25V21H6.75L17.81,9.94,14.06,6.19ZM20.71,7.04a1,1,0,0,0,0-1.41L18.37,3.29a1,1,0,0,0-1.41,0L15.13,5.12l3.75,3.75,1.83-1.83Z" />
                                            <path id="Path_196" data-name="Path 196" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Ваше Мнение <span>*</span></label>
                            </div>
                            <div class="group avatar">
                                <div>
                                    <input type="text" name="tex" class="avatar_input" >
                                    <label class="prevdef"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24">
                                            <defs>
                                                <style>
                                                    .cls-2 {
        fill: none;
      }
    </style>
                                            </defs>
                                            <g id="baseline-photo-24px" class="cls-1">
                                                <path id="Path_294" data-name="Path 294" class="cls-2" d="M0,0H24V24H0Z" />
                                                <path id="Path_295" data-name="Path 295" d="M21,19V5a2.006,2.006,0,0,0-2-2H5A2.006,2.006,0,0,0,3,5V19a2.006,2.006,0,0,0,2,2H19A2.006,2.006,0,0,0,21,19ZM8.5,13.5,11,16.51,14.5,12,19,18H5Z" />
                                            </g>
                                        </svg>
                                        Ваш Аватар </label>
                                    <div class="fileline"></div>
                                </div>
                                <div class="choosefile">
                                    <input type="file" name="img">
                                    <button class="file"> Выберите Файл</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-item-center star_block">
                            <svg id="baseline-star-24px" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <defs>
                                    <style>
                                        .cls-5 {
        fill: none;
      }
    </style>
                                </defs>
                                <path id="Path_296" data-name="Path 296" class="cls-5" d="M0,0H24V24H0Z" />
                                <path id="Path_297" data-name="Path 297" d="M12,17.27,18.18,21l-1.64-7.03L22,9.24l-7.19-.61L12,2,9.19,8.63,2,9.24l5.46,4.73L5.82,21Z" />
                                <path id="Path_298" data-name="Path 298" class="cls-5" d="M0,0H24V24H0Z" />
                            </svg>
                            <p>Оценка <span>*</span></p>
                        </div>
                        <div class="mt-5 strstar">
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
                                        <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                    </svg>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
                                        <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                                    </svg>
                        </div>
                        <p><span>*</span> - обязательные для заполнения поля</p>
                        <div class="d-flex ">
                            <input type="checkbox" id="chek" name="yes" value="1" required>
                            <input type="hidden"  name="star" value="1">
                            <label for="chek">Я согласен на <a href="{{ route('contract view') }}">обработку персональных данных</a></label>
                        </div>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </section>
        <script>
         $(".prevdef").css({'top': '10px', 'opacity': 1, 'font-size': '16px'})
         
         $('.fileline').css('margin-top', '12px')
        $(".prevdef").focus(function(event){
  event.preventDefault();
 
});

</script>
  @endsection  





@yield('footer')