@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(images/services/appointment_background.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Reservar una cita</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Inicio</a></li>
                <li><span>/</span></li>
                <li>Reservar una cita</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Make Appointment Start-->
<section class="make-appointment">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="make-appointment__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">contáctame</span>
                        <h2 class="section-title__title">Reserva <span>una</span> <br> Cita</h2>
                    </div>
                    <div class="make-appointment__form-box">
                        <form action="assets/inc/sendemail.php"
                            class="make-appointment__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Nombre(s)" name="F-name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Apellidos" name="L-name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="email" placeholder="Correo Electrónico" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Número telefónico" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Selecciona un servicio</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Booking for?</option>
                                            <option value="1">Booking for 01</option>
                                            <option value="2">Booking for 02</option>
                                            <option value="3">Booking for 03</option>
                                        </select>
                                    </div>
                                </div-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Fecha sujeta a disponibilidad" name="date"
                                            id="datepicker2">
                                        <div class="contact-one__form-icon">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="make-appointment__form-input-box text-message-box">
                                        <textarea name="message" placeholder="Comentarios"></textarea>
                                    </div>
                                    <div class="make-appointment__form-btn-box">
                                        <button type="submit" class="thm-btn make-appointment__form-btn">Reservar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="make-appointment__right">
                    <div class="make-appointment__shape-1 img-bounce">
                        <img src="{{ asset('images/shapes/circle_appt.svg') }}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="make-appointment__single">
                                <div class="make-appointment__img">
                                    <img src="{{  asset('images/services/item_1.jpg') }}" alt="Lourdes Osiris Morales Ruiz">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="make-appointment__single make-appointment__single--two">
                                <div class="make-appointment__img">
                                    <img src="{{  asset('images/services/item_2.jpg') }}" alt="Lourdes Osiris Morales Ruiz">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Make Appointment End-->

@endsection
