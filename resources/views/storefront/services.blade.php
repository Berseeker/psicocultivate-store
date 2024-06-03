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
            @foreach ($services as $service)
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-two__single">
                        <div class="services-two__img-box">
                            <div class="services-two__img">
                                <img src="{{ asset('images/' . $service->main_image) }}" alt="Psicoterapia">
                            </div>
                            <!--div class="services-two__icon">
                                <span class="icon-heart"></span>
                            </div-->
                        </div>
                        <div class="services-two__content">
                            <div class="services-two__title-box">
                                <h3 class="services-two__title"><a href="{{ route('service.detail', ['id' => $service->id]) }}">{{ $service->nombre }}</a></h3>
                                <p class="services-two__text">Scelerisque eleifend donec pretium vulputate sapien.
                                </p>
                            </div>
                            <div class="services-two__btn-box">
                                <a href="{{ route('service.detail', ['id' => $service->id]) }}"><span class="icon-right-arrow"></span>Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
            @endforeach
        </div>
    </div>
</section>
<!--Services Page End-->
@endsection
