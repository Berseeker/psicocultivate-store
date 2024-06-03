@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<!--Page Header Start-->
<section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(images/services/background.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Servicios</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><span>/</span></li>
                <li>Servicios</li>
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
                            <img src="{{ asset('images/services/servicio_psicoterapia.jpg') }}" alt="Psicoterapia">
                        </div>
                        <!--div class="services-two__icon">
                            <span class="icon-heart"></span>
                        </div-->
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Psicoterapia</a></h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>Más</a>
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
                            <img src="{{  asset('images/services/servicio_talleres.jpg') }}" alt="Talleres">
                        </div>
                        <!--div class="services-two__icon">
                            <span class="icon-self-confidence"></span>
                        </div-->
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Talleres</a></h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>Más</a>
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
                            <img src="{{ asset('images/services/servicio_lectura.jpg') }}" alt="">
                        </div>
                        <!--div class="services-two__icon">
                            <span class="icon-family"></span>
                        </div-->
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Club de Lectura</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>Más</a>
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
                            <img src="{{ asset('images/services/servicio_informe.jpg') }}" alt="">
                        </div>
                        <!--div class="services-two__icon">
                            <span class="icon-meeting"></span>
                        </div-->
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Informe Psicológico</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>Más</a>
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
                            <img src="{{ asset('images/services/servicio_atencion.jpg') }}" alt="">
                        </div>
                        <!--div class="services-two__icon">
                            <span class="icon-anxiety"></span>
                        </div-->
                    </div>
                    <div class="services-two__content">
                        <div class="services-two__title-box">
                            <h3 class="services-two__title"><a href="{{ route('service', ['slug' => 'servicio-1']) }}">Atención Psicológica</a>
                            </h3>
                            <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                            </p>
                        </div>
                        <div class="services-two__btn-box">
                            <a href="{{ route('service', ['slug' => 'servicio-1']) }}"><span class="icon-right-arrow"></span>Más</a>
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
