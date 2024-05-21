@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<!--Page Header Start-->
<section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Team Details</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Team Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Team Details Start-->
<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="team-details__left">
                    <div class="team-details__img">
                        <img src="{{ asset('images/aboutme/about_me.svg') }}" alt="Osiris Morales Ruiz">
                    </div>
                    <div class="team-details__social-box">
                        <div class="team-details__social-title">
                            <p>Follow Me</p>
                        </div>
                        <div class="team-details__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="team-details__right">
                    <h3 class="team-details__title">Hola,
                        <br> mi nombre es
                        <br> Osiris Morales</h3>
                    <p class="team-details__text">
                        Soy psicóloga clínica, enfocada en modelos psicoterapéuticos basados en evidencia. 
                        Cuento con experiencia en organizaciones civiles, privadas y gubernamentales. 
                        He enfocado mi carrera profesional en la atención psicológica individual, facilitación de talleres y atención en primer nivel en casos de violencia de género.
                    </p>
                    <p>
                        He desarrollado estrategias para facilitar talleres dirigidos a diversos grupos, incluyendo infancias, mujeres y empresas. Estos talleres ofrecen psicoeducación, 
                        contención emocional con perspectiva de género y el desarrollo de habilidades socioemocionales con el objetivo de potenciar el bienestar emocional. 
                        Mi experiencia en la planificación y facilitación de talleres psicoeducativos me ha permitido crear propuestas para empresas que buscan mejorar el ambiente laboral a través del fortalecimiento de habilidades socioemocionales.
                    </p>
                    <!--div class="team-details__points-box">
                        <h3 class="team-details__points-title">I’m Here to Help Your:</h3>
                        <ul class="team-details__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-somatise"></span>
                                </div>
                                <h4>Anexity</h4>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-psychology-3"></span>
                                </div>
                                <h4>Autism</h4>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-depression"></span>
                                </div>
                                <h4>Depression</h4>
                            </li>
                        </ul>
                    </div-->
                    <div class="team-details__btn-box">
                        <a href="make-appointment.html" class="team-details__btn thm-btn">Make an
                            Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->

<!--Certificate One Start-->
<section class="certificate-one">
    <div class="container">
        <div class="certificate-one__inner">
            <h3 class="certificate-one__title">I’m Professional and Completely Certified Psychology Counselor
            </h3>
            <ul class="certificate-one__list list-unstyled">
                <li>
                    <div class="certificate-one__img">
                        <img src="assets/images/team/certificate-1-1.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="assets/images/team/certificate-1-2.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="assets/images/team/certificate-1-3.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="assets/images/team/certificate-1-4.jpg" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Certificate One End-->

<!--Experience One start-->
<section class="experience-one">
    <div class="container">
        <div class="experience-one__inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="experience-one__left">
                        <h3 class="experience-one__title">Personal Experience</h3>
                        <p class="experience-one__text">If you are going to use a passage of Lorem Ipsum, you
                            need
                            to <br> be sure there isn't anything embarrassing hidden.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="experience-one__right">
                        <ul class="experience-one__progress-list list-unstyled">
                            <li class="experience-one__progress">
                                <h4 class="experience-one__progress-title">Counseling</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="77%">
                                        <div class="count-text">77%</div>
                                    </div>
                                </div>
                            </li>
                            <li class="experience-one__progress">
                                <h4 class="experience-one__progress-title">Psychology</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="68%">
                                        <div class="count-text">68%</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!--Experience One End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="contact-three__bg"
                style="background-image: url(assets/images/backgrounds/contact-three-bg.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact with me</span>
                    <h2 class="section-title__title">Feel Free to Get in <span>Touch</span>
                        <br> with Aleesha</h2>
                </div>
                <div class="contact-three__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-three__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <div class="contact-three__showing-sort">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Select Service</option>
                                            <option value="1">Sort by popular-01</option>
                                            <option value="2">Sort by popular-02</option>
                                            <option value="3">Sort by popular-03</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-three__input-box text-message-box">
                                    <textarea name="message" placeholder="Write  a Message"></textarea>
                                </div>
                                <div class="contact-three__btn-box">
                                    <button type="submit" class="thm-btn contact-three__btn">Send a Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Three End-->

@endsection
