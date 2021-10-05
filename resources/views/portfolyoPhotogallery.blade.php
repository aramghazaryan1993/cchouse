@extends('layouts.app_cchous')

@section('title', 'Фотогалерея')

@yield('header')

  @section('content')
                    <section>
            <div class="bigContainer under_nav">
                <div class="logo_black">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
                </div>
                <p> <em>Главная / Портфолио / Фотогалерея </em> </p>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="title_text">
                    <h1>Фотогалерея</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    @foreach($ShowPhotogallery as $value)
                    <div class="swiper-slide">
                        <img src="{{asset('uplodImage/portfolyo/'.$value->img)}}" alt="imag">
                    </div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="buttons">
                    <div class="swiper-button-next swiper-button-white next ">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 8.5L1 16" stroke="#C7CCD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> </div>
                    <div class="swiper-button-prev swiper-button-white prev">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L1 8.5L9 1" stroke="#C7CCD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    @foreach($ShowPhotogallery as $value)
                    <div class="swiper-slide">
                        <img src="{{asset('uplodImage/portfolyo/'.$value->img)}}" alt="imag">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="bigContainer">
                <div class="twobuttons">
                    <a href="{{route('portfolyo photogallery view',['id' => $PrevPortfolyoId]) }}"><button class="first_button"><span>&larr;</span>Назад к Списку</button></a>
                    <a href="{{route('portfolyo photogallery view',['id' => $NextPrevPortfolyoId]) }}"><button class="second_button">Следующий Проект <span>&rarr; </span></button></a>
                </div>
            </div>
        </section>
      
        
            
                    
                     
                   <?php 
                   //$people = [$value->id];
              //     print_r($people);
                   //echo '<pre>';  print_r(str_replace([Request::segment(2)],[$value->id],[$value->id]));
                   
                   ?>
        

        <?php 
        
        
        //echo '<pre>'; print_r($PortfolyoNextPrev); ?>
  @endsection  





@yield('footer')