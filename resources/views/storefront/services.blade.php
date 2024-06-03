@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<!--Page Header Start-->
<section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(images/services/background.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services Page Start-->
<section class="services-page">
    <div class="container">
        <div class="row">
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-1.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-heart"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Dating &
                                    Relationship</a></h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-2.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-self-confidence"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Self Esteem
                                    Issues</a></h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-3.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-family"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Family Psycology</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-4.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-meeting"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Career
                                    Counseling</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-5.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-anxiety"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Anxiety & Grief</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
            <!--Services Two Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-6.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-family-3"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Young Adult
                                    Intensive</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single End-->
        </div>
    </div>
</section>
<!--Services Page End-->
@endsection
