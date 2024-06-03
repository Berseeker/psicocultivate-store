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
                                    <span class="fas fa-comments"></span><a href="{{ route('blog', ['id' => 1]) }}">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="{{ route('blog', ['id' => 1]) }}">Recomendaciones para la mejorar la higiene del sueño</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="{{ route('blog', ['id' => 1]) }}">Leer más<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-2.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>13</span>Apr</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">5 Things to Remember When You Can't Take it Anymore</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-3.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">See What is an ‘Energy and How to Protect Yourself</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-3.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">Few Common Reasons Why You May Always be Late</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-5.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">The 9 Best Affordable Therapy Options for 2023</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-6.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">What is a Moral Compass and How to Find Yours</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="550ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-7.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">Patient-Led Advocacy Group Shares Patient</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                    <!--Blog Start-->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="blog-four__single">
                            <div class="blog-four__single__image">
                                <img src="assets/images/blog/blog-4-8.jpg" alt="delogis">
                                <a href="blog-details.html" class="blog-four__single__image__link"></a>
                            </div>
                            <div class="blog-four__single__content">
                                <div class="blog-four__single__date"><span>10</span>Mar</div>
                                <div class="blog-four__single__comment">
                                    <span class="fas fa-comments"></span><a href="blog-details.html">2 Comments</a>
                                </div>
                                <h3 class="blog-four__single__title"><a href="blog-details.html">See What is an ‘Energy and How to Protect Yourself</a></h3>
                            </div>
                            <a class="blog-four__single__rm" href="blog-details.html">Read More<span class="delogis-icons-two-right-arrow"></span></a>
                        </div>
                    </div>
                    <!--Blog End-->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-comments"></i>2
                                            Comments</span>
                                        <a href="blog-details.html">Get Deep Knowledge
                                            <br> of Bipolar Disorder</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-comments"></i>2
                                            Comments</span>
                                        <a href="blog-details.html">If you are going to improf <br>use a passage
                                        </a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-comments"></i>2
                                            Comments</span>
                                        <a href="blog-details.html">Donec sit amet is<br> lacinia nulla.</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.html">Stress Management</a></li>
                            <li><a href="blog-details.html">Mental Health</a></li>
                            <li><a href="blog-details.html">Depressions</a></li>
                            <li><a href="blog-details.html">Therapies</a></li>
                            <li><a href="blog-details.html">Counseling</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__cases">
                        <h3 class="sidebar__title">Cases</h3>
                        <div class="sidebar__cases-box">
                            <div class="sidebar__cases-carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                <div class="item">
                                    <div class="sidebar__cases-single">
                                        <div class="sidebar__cases-bg"
                                            style="background-image: url(assets/images/backgrounds/sidebar-cases-bg.jpg);">
                                        </div>
                                        <p>Recovery is
                                            <br> Possible</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sidebar__cases-single">
                                        <div class="sidebar__cases-bg"
                                            style="background-image: url(assets/images/backgrounds/sidebar-cases-bg-2.jpg);">
                                        </div>
                                        <p>Patient-Led <br> Advocacy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Depression</a>
                            <a href="#">Addict</a>
                            <a href="#">OCD</a>
                            <a href="#">Psychology</a>
                            <a href="#">Counseling</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BLog One End-->
@endsection
