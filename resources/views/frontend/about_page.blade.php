@extends('frontend.main_master')
@section('main')
	<main>
        <section class="breadcrumb__wrap">
             <div class="container custom-container">
                <div class="row justify-content-center">
                     <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title"> О нас</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/')}}">Главная</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">О нас</li>
                                </ol>
                            </nav>
                         </div>
                    </div>
                </div>
             </div>
             <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon01.png') }}" alt="{{ $about->title }}"></li>
                    <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon02.png') }}" alt="{{ $about->title }}"></li>
                    <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon03.png') }}" alt="{{ $about->title }}"></li>
                    <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon04.png') }}" alt="{{ $about->title }}"></li>
                    <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon05.png') }}" alt="{{ $about->title }}"></li>
                     <li><img src="{{ asset('frontend/img/icons/breadcrumb_icon06.png') }}" alt="{{ $about->title }}"></li>
                 </ul>
             </div>
         </section>
            
         <section class="about about__style__two">
            <div class="container">
                 <div class="row align-items-center">
                    <div class="col-lg-6">
                         <div class="about__image">
                             <img src="{{ asset('frontend/img/images/about_img.png') }}" alt="{{ $about->title }}">
                        </div>
                     </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <div class="section__title">
                                    <span class="sub-title">01 - About me</span>
                                    <h2 class="title">{{ $about->title }}</h2>
                                </div>
                                <div class="about__exp">
                                    <div class="about__exp__icon">
                                        <img src="{{ asset('frontend/img/icons/about_icon.png') }}" alt="{{ $about->title }}">
                                    </div>
                                    <div class="about__exp__content">
                                        <p><span>{{ $about->short_title }}</span></p>
                                    </div>
                                </div>
                                <p class="desc">{{ $about->description }}</p>
                                <a href="{{ route('home.about') }}" class="btn">Скачать моё резюме</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="about__info__wrap">    
                            	<div class="tab-content" id="myTabContent">
                                	<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                                     <p class="desc">{{ $about->long_description }}</p>
                                	</div>
                             	</div>
                         	</div>
                     	</div>
                 </div>
             </div>
        </section>
     </main>
@endsection