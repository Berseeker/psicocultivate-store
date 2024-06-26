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
    p {
        font-size: 16px;
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
                        <img src="{{ asset('images/aboutme/me_natural.svg') }}" alt="Osiris Morales Ruiz">
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
                        <a href="make-appointment.html" class="team-details__btn thm-btn">Haz una cita</a>
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
                    <li>Máster en Terapias Contextuales - España (2023)</li>
                    <li>Máster en Psicología Clínica y de la Salud - España (2024)</li>
                    <li>Maestría en Terapia Cognitiva Conductual - México (en curso)</li>
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
            <h3 class="certificate-one__title">Certificaciones
            </h3>
            <ul class="certificate-one__list list-unstyled">
                <li>
                    <div class="certificate-one__img">
                        <img src="{{  asset('images/aboutme/licenciatura.svg') }}" data-bs-toggle="modal" data-bs-target="#certificado1" alt="Titulo de licenciatura">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="{{  asset('images/aboutme/pruebas.svg') }}" data-bs-toggle="modal" data-bs-target="#certificado2" alt="Diplomado de Pruebas">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="{{  asset('images/aboutme/sexologia.svg') }}" data-bs-toggle="modal" data-bs-target="#certificado3" alt="Diplomado en Sexologia">
                    </div>
                </li>
                <li>
                    <div class="certificate-one__img">
                        <img src="{{  asset('images/aboutme/contextual.svg') }}" data-bs-toggle="modal" data-bs-target="#certificado4" alt="Diplomado en Contextuales">
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
                        Disfruto de coleccionar monedas y Funkos de mis series preferidas, asimismo, de armar rompecabezas y dibujar.
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
            <span class="section-title__tagline">Ponte en contacto conmigo</span>
            <h2 class="section-title__title">Sientete libre de mandarme un <span>mensaje</span></h2>
        </div>
        <div class="contact-three__form-box">
            <form action="{{ route('about') }}" method="POST" class="contact-three__form contact-form-validated"
                novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box @error('name') is-invalid @enderror">
                            <input type="text" placeholder="Tu nombre" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box @error('subject') is-invalid @enderror">
                            <input type="text" placeholder="Asunto" name="subject">
                            @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box @error('email') is-invalid @enderror">
                            <input type="email" placeholder="Correo electrónico" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-three__input-box @error('phone') is-invalid @enderror">
                            <input type="text" placeholder="Teléfono de contácto" name="phone">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--div class="col-xl-6 col-lg-6">
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
                    </div-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-three__input-box text-message-box @error('message') is-invalid @enderror">
                            <textarea name="message" placeholder="Escribe un mensaje"></textarea>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="contact-three__btn-box">
                            <button type="submit" class="thm-btn contact-three__btn">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</section>
<!--Contact Three End-->


<!-- Modal -->
<div class="modal fade" id="certificado1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('images/aboutme/licenciatura_grande.svg') }}" alt="Titulo de Licenciatura en psicologia" style="width: 100%;">
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="certificado2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('images/aboutme/pruebas_grande.svg') }}" alt="Diplomado de Baterias" style="width: 100%;">
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="certificado3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('images/aboutme/sexologia_grande.svg') }}" alt="Diplomado de Baterias" style="width: 100%;">
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="certificado4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('images/aboutme/contextual_grande.svg') }}" alt="Diplomado de Baterias" style="width: 100%;">
        </div>
      </div>
    </div>
</div>

@endsection
