@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<style>
    .custom_right {
        margin-left: 0px;
        margin-right:0px;
        margin-bottom: 20px;
    }

    @media (min-width: 900px) {
        .custom_right {
            margin-right:150px;
            margin-bottom: 0px;
        }
    }
</style>

<!--Page Header Start-->
<section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(/images/aboutme/about_banner.svg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Sobre mí</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><span>/</span></li>
                <li>Detalles sobre mí</li>
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
                            <a href="https://www.facebook.com/psIcoCultivate" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/psico_cultivate/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@psico_cultivate?_t=8mOA17ObW7s&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
                            <a href="https://www.linkedin.com/in/osiris-morales-ruiz-Psicocultivate/" target="_blank"><i class="fab fa-linkedin"></i></a>
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
<!-- Seccion Custom -->
<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-xl-6 col-lg-6">
                <h3 class="team-details__title">Formación Académica</h3>
                <ul style="list-style: disc;margin-top:5px;">
                    <li>Licenciada en Psicología - México (2020)</li>
                    <li>Máster en Terapias Contextuales (2023)</li>
                    <li>Máster en Psicología Clínica y de la Salud - España (2024)</li>
                    <li>Maestría en Terapia Cognitiva Conductual - En curso</li>
                </ul>
            </div>
            <div class="col-xs-12 col-xl-6 col-lg-6">
                <h3 class="team-details__title">Diplomados:</h3>
                <ul style="list-style: disc;margin-top:5px;">
                    <li>Preparación de baterías de pruebas psicológicas, elaboración de dictámen psicológico pericial</li>
                    <li>Sexología clínica y terapia de parejas</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Seccion Custom End -->
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

<!--Team Details Start-->
<section class="team-details" style="margin-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="team-details__right custom_right">
                    <h3 class="team-details__title">Conoce más,
                        <br> sobre mí</h3>
                    <p class="team-details__text">
                        En este pequeño espacio para presentarme, será un reto describirme para que puedas conocerme más debido a todo lo que me compone y la importancia de tener límites en mi intimidad, 
                        pero que esto no se confunda con cuestiones banales de mi vida, el objetivo de este texto es para que puedas conocer a la persona que te brinda uno de los servicios más transformadores como lo es la psicoterapia, 
                        la persona que estará acompañándote para que alcances tus objetivos, que dentro de sesión y fuera de esta trabajará con ética, confidencialidad, profesionalidad y de forma colaborativa contigo. 
                        Dentro de sesión me gustaría que lo percibas como un espacio seguro para ti, donde tu tiempo, proceso, historia de vida e inversión, importan e importan mucho para mí, 
                        así que, dentro de esta, yo no soy la protagonista del cambio, ese papel es tuyo y solo tuyo. Yo seré una acompañante y aliada con recursos, técnicas y herramientas en las que me he formado durante 7 años y seguiré haciendo... 
                    </p>
                    <p>
                        Algunos de los adjetivos que me describen son: determinante, sensible y aventurera. Me gusta conocer nuevos lugares, los pueblos, 
                        la naturaleza en espacios como el mar o el bosque. Los valores importantes en mi vida son la justicia, el afecto y la autonomía. 
                        Considero que el afecto es revolucionario, crea espacios seguros y de conexiones bien tratantes que transforman, no solo, a las infancias. 
                        Que la búsqueda de justicia otorga cambios que dignifican a las personas y la autonomía es indispensable para la autorrealización. 
                        Disfruto de coleccionar monedas y Funkos de mis series preferidas, asimismo, de armar rompecabezas.
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="team-details__left">
                    <div class="team-details__img">
                        <img src="{{ asset('images/aboutme/personal_me.svg') }}" alt="Osiris Morales Ruiz">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->

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
