@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 120px;">
    <div class="page-header-bg" style="background-image: url(images/blog/background.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Blogs</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><span>/</span></li>
                <li>Todos los Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--BLog One Start-->
<section class="blog-one">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="{{ asset('images/caratulas/blogs.svg') }}" alt="Blog del Sueño">
                                <a href="{{ route('blog', ['id' => 1]) }}" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>09</span>Jan</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="{{ route('blog', ['id' => 1]) }}">0 Comentarios</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="{{ route('blog', ['id' => 1]) }}">Recomendaciones para la mejorar la higiene del sueño</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="{{ route('blog', ['id' => 1]) }}">Leer más<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Ultimos Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-comments"></i>0
                                            Comments</span>
                                        <a href="{{ route('blog', ['id' => 1]) }}">Recomendaciones para
                                            <br> la mejorar la higiene del sueño</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categorias</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="#">Bienestar</a></li>
                            <li><a href="#">Mental Health</a></li>
                            <li><a href="#">Depressions</a></li>
                            <li><a href="#">Therapies</a></li>
                            <li><a href="#">Counseling</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BLog One End-->
@endsection
