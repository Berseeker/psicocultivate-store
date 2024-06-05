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
    <div class="page-header-bg" style="background-image: url(/images/team/background.jpg)">
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
                        <img src="{{ asset('images/team/gonzalez_page.png') }}" alt="Nimsi Janine González Alemán">
                    </div>
                    <div class="team-details__social-box">
                        <div class="team-details__social-title">
                            <p>Follow Me</p>
                        </div>
                        <div class="team-details__social">
                            <a href="https://api.whatsapp.com/send?phone=529993299170" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.instagram.com/una_lectora_derrotada" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://unalectoraderrotada.blogspot.com/" target="_blank"><i class="fas fa-blog"></i></a>
                            <a href="mailto:janine.aleman96@gmail.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="team-details__right">
                    <h3 class="team-details__title">Hola,
                        <br> mi nombre es
                        <br> Nimsi Janine González Alemán</h3>
                    <p class="team-details__text">
                        Soy licenciada en Literatura Latinoamericana por la Facultad de Ciencias Antropológicas
                        perteneciente a la Universidad Autónoma de Yucatán. Actualmente, trabajo como asistente remota
                        para atención al cliente, pero a tiempo completo soy activista para una asociación civil que asiste a
                        mujeres y niñas víctimas de violencia además, soy acompañante de mujeres que quieren ejercer sus
                        derechos sexuales y reproductivos.
                        Desde el 2016 me inclinado en la investigación literaria de autoras latinoamericanas desde el análisis
                        textual hasta la impartición de talleres.
                        He participado en seminarios de investigación, diplomados y conversatorios, así como en ponencias
                        hablando de y desde la historia y vivencia de la península de Yucatán.
                        Durante el 2021 y 2022 fui docente en una comunidad del interior del estado de Yucatán para
                        infancias de diversos grados a nivel educación básica, siendo esta experiencia, un pilar para trabajar
                        mi narrativa.
                    </p>
                    <p>
                        La corrección de tesis de grado sigue siendo una de mis labores destacadas. Aunque, mi actividad
                        favorita por ahora es generar contenido en redes sociales.
                        Los talleres y círculos de lectura y escritura le han dado sentido a mi cotidianeidad y mi premisa
                        gracias a las compañeras que los imparten se ha basado en desarrollar narrativas para escribir y leer
                        sobre las mujeres. Me he pronunciado como feminista aunque mi pensamiento sigue corrientes de la
                        otredad y la periferia y posiblemente mi lucha no se pueda contener en un concepto tan particular.
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
