@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Make Appointment</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Make Appointment</li>
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
                        <span class="section-title__tagline">contact with us</span>
                        <h2 class="section-title__title">Let’s Book <span>Your</span> <br> Appointment</h2>
                    </div>
                    <div class="make-appointment__form-box">
                        <form action="assets/inc/sendemail.php"
                            class="make-appointment__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="First Name" name="F-name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Last Name" name="L-name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Phone Number" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="make-appointment__form-input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Select a Program</option>
                                            <option value="1">Select a Program 01</option>
                                            <option value="2">Select a Program 02</option>
                                            <option value="3">Select a Program 02</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Booking for?</option>
                                            <option value="1">Booking for 01</option>
                                            <option value="2">Booking for 02</option>
                                            <option value="3">Booking for 03</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-appointment__form-input-box">
                                        <input type="text" placeholder="Select Date" name="date"
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
                                        <textarea name="message" placeholder="Write  a Message"></textarea>
                                    </div>
                                    <div class="make-appointment__form-btn-box">
                                        <button type="submit" class="thm-btn make-appointment__form-btn">Book
                                            Appointment</button>
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
                        <img src="assets/images/shapes/make-appointment-shape-1.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="make-appointment__single">
                                <div class="make-appointment__img">
                                    <img src="assets/images/resources/make-appointment-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="make-appointment__single make-appointment__single--two">
                                <div class="make-appointment__img">
                                    <img src="assets/images/resources/make-appointment-img-2.jpg" alt="">
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
