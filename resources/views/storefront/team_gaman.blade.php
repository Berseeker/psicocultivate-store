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
                        <br> Dianely Cocom</h3>
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
