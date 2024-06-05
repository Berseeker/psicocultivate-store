@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<!--Page Header Start-->
<section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(images/team/teams.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Comunidad</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><span>/</span></li>
                <li>Nuestra comunidad</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Team Page Start-->
<section class="team-page">
    <div class="container">
        <div class="row">
            <!--Team Dainely-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <a href="{{ route('team.dianely') }}">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-1.jpg" alt="">
                            </div>
                            <div class="team-one__shape-1"></div>
                            <div class="team-one__name-box">
                                <h3><a href="{{ route('team.dianely') }}"><span>Cocom</span>
                                        <br>Dianely</a></h3>
                            </div>
                            <div class="team-one__sub-title-and-share-btn">
                                <div class="team-one__sub-title">
                                    <p>- Abogada</p>
                                </div>
                                <div class="team-one__share-and-email">
                                    <a href="team-details.html"><span class="fa fa-share-alt"></span></a>
                                    <a href="team-details.html"><span class="fa fa-envelope"></span></a>

                                </div>
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <!--Team Dainely-->
            <!--Team Grupo Gaman-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-one__single">
                    <a href="{{ route('team.gaman') }}">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-2.jpg" alt="">
                            </div>
                            <div class="team-one__shape-1"></div>
                            <div class="team-one__name-box">
                                <h3><a href="team-details.html"><span>Grupo</span>
                                        <br> Gaman</a></h3>
                            </div>
                            <div class="team-one__sub-title-and-share-btn">
                                <div class="team-one__sub-title">
                                    <p>- Empresa</p>
                                </div>
                                <div class="team-one__share-and-email">
                                    <a href="team-details.html"><span class="fa fa-share-alt"></span></a>
                                    <a href="team-details.html"><span class="fa fa-envelope"></span></a>

                                </div>
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <!--Team One Single End-->
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-one__single">
                    <a href="{{ route('team.gonzalez') }}">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('images/team/gzlz_home.jpg') }}" alt="Nimsi Janine González Alemán">
                            </div>
                            <div class="team-one__shape-1"></div>
                            <div class="team-one__name-box">
                                <h3><a href="{{ route('team.gonzalez') }}"><span>González</span>
                                        <br>Nimsi</a></h3>
                            </div>
                            <div class="team-one__sub-title-and-share-btn">
                                <div class="team-one__sub-title">
                                    <p>- Escritora</p>
                                </div>
                                <div class="team-one__share-and-email">
                                    <a href="{{ route('team.gonzalez') }}"><span class="fa fa-share-alt"></span></a>
                                    <a href="mailto:janine.aleman96@gmail.com"><span class="fa fa-envelope"></span></a>

                                </div>
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="https://api.whatsapp.com/send?phone=529993299170" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/una_lectora_derrotada" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://unalectoraderrotada.blogspot.com/" target="_blank"><i class="fas fa-blog"></i></a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <!--Team One Single End-->
        </div>
    </div>
</section>
<!--Team Page End-->
@endsection
