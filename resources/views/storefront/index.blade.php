@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')
  <!-- Main Sllider Three Start -->
  <section class="main-slider-three" id="home">
      <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
          data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

          <div class="item main-slider-three__slide-1">
              <div class="main-slider-three__bg"
                  style="background-image: url(/images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas_green.svg') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/sliders/inicio.png') }}" alt=""> <!-- imagen principal -->
              </div>
              <!--div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png') }}" alt="">
              </div-->
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <!--div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">Terapia Online</p-->
                      </div>
                      <h2 class="main-slider-three__title">Un espacio seguro,<br>
                          es un espacio de <br> <span style="border-bottom: 4px solid #4f6635;">cambios</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Haz un cita</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Osiris Morales</h4>
                              <p class="main-slider-three__founder-sub-title">Psicóloga - Terápia Online</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!--div class="item main-slider-three__slide-2">
              <div class="main-slider-three__bg"
                  style="background-image: url(images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas.png') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/sliders/slide_2.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">Online</p>
                      </div>
                      <h2 class="main-slider-three__title">Un espacio seguro,<br>
                          es un espacio de <br> <span>cambios</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Make an
                              Appointment</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Osiris</h4>
                              <p class="main-slider-three__founder-sub-title">Osiris Morales - Psicóloga</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div-->

          <!--div class="item main-slider-three__slide-3">
              <div class="main-slider-three__bg"
                  style="background-image: url(images/backgrounds/main-slider-three-bg.jpg);"></div>
              <div class="main-slider-three__shape-3 img-bounce">
                  <img src="{{ asset('/images/shapes/ramas.png') }}" alt="">
              </div>
              <div class="main-slider-three__img">
                  <img src="{{ asset('/images/resources/main-slider-three-img-3.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-one zoominout">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-1.png') }}" alt="">
              </div>
              <div class="main-slider-three__star-two img-bounce">
                  <img src="{{ asset('/images/shapes/main-slider-three-star-2.png')}}" alt="">
              </div>
              <div class="container">
                  <div class="main-slider-three__content">
                      <div class="main-slider-three__sub-title-box">
                          <div class="main-slider-three__shape-1"
                              style="background-image: url(images/shapes/main-slider-three-shape-1.png);">
                          </div>
                          <p class="main-slider-three__sub-title">100% Positive Result</p>
                      </div>
                      <h2 class="main-slider-three__title">We’re Ready to <br>
                          Listen Your <span>Issues</span></h2>
                      <div class="main-slider-three__btn-founder-box">
                          <a href="make-appointment.html" class="main-slider-two__btn-one thm-btn">Make an
                              Appointment</a>
                          <div class="main-slider-three__founder-box">
                              <h4 class="main-slider-three__founder-name">Christine</h4>
                              <p class="main-slider-three__founder-sub-title">Christine Eve - Founder</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div-->

      </div>
  </section>
  <!--Main Sllider Three Start -->

  <!--Feature Two End-->

  <!--About Three Start-->
<section class="about-three" id="about" style="margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Bienvenida/o a Psicocultivate</span>
                        <h2 class="section-title__title">Un lugar para construir
                            espacios seguros.</h2>
                    </div>
                    <p class="about-three__text" style="font-size: 18px;">Explora nuestra comunidad enfocada en el bienestar emocional y el fortalecimiento personal.</p>
                    <div class="about-three__points-box">
                            <ul class="about-three__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Psicología</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Psicoterapia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Derecho</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="about-three__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Literatura latinoamericana</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Perspectiva de género</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Talleristas</p>
                                        </div>
                                    </li>
                            </ul>
                    </div>
                    <div class="about-three__btn-box">
                        <a href="make-appointment.html" class="about-three__btn thm-btn">Haz una reserva</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-three__right">
                    <div class="about-three__img-box">
                        <div class="about-three__img">
                            <img src="{{ asset('/images/home-showcase/home_desc.svg') }}" alt="Psicocultivate">
                        </div>
                        <div class="about-three__img-2">
                            <img src="{{ asset('/images/home-showcase/home_vid.svg') }}" alt="Psicocultivate">
                            <div class="about-three__shape-1"></div>
                            <!--div class="about-three__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="about-three__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--About Three End-->

<!--Services Three Start-->
<section class="services-three" id="services">
    <div class="services-three__bg-box">
        <div class="services-three__bg"
            style="background-image: url(images/backgrounds/services-three-bg.png);"></div>
    </div>
    <div class="container">
        <div class="services-three__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-three__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Servicios</span>
                            <h2 class="section-title__title">Un rincón para cultivar
                                tu bienestar emocional</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-three__right">
                        <p class="services-three__text" style="font-size: 18px;">Encontrarás servicios que integran terapias basadas en evidencia. 
                            Mi objetivo es proporcionar un espacio seguro para el crecimiento y el desarrollo de cada persona, 
                            colaborando a alcanzar tu máximo potencial en un entorno de confianza y profesionalismo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-three__bottom">
            <div class="row">
                @foreach ($services as $service)
                    <!--Services Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-three__single">
                            <div class="services-three__img-box">
                                <div class="services-three__img">
                                    <img src="{{ asset('images/' . $service->main_image) }}" alt="">
                                </div>
                                <!--div class="services-three__icon">
                                    <span class="icon-leaf"></span>
                                </div-->
                            </div>
                            <div class="services-three__content">
                                <div class="services-three__content-inner">
                                    <div class="services-three__content-top">
                                        <h3 class="services-three__title"><a href="{{ route('service.detail', ['id' => $service->id]) }}">{{ $service->nombre }}</a></h3>
                                        <p class="services-three__text">Scelerisque eleifend donec pretium
                                            vulputate
                                            sapien
                                        </p>
                                    </div>
                                    <div class="services-three__btn-box">
                                        <a href="dating-relationship.html" class="services-three__btn"><span
                                                class="icon-right-arrow"></span>Más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single Start-->   
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--Services Three End-->

<!--Testimonial Three Start-->
<section class="testimonial-three">
    <div class="testimonial-three__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(images/backgrounds/testimonial.svg);"></div>
    <div class="container">
        <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": true,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 10000,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
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
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Cuando llegué a las sesiones pensé: Que joven! .
                            Más de inmediato entendí que estaba frente a una profesional muy especial. Su personalidad tan cálida, 
                            comprometida y a la vez poseedora de un método muy bueno, me hizo posible descubrir hechos de mi vida de una forma fácil y clara. 
                            Mi vida cambió al entender la raíz de muchas actitudes y reacciones. 
                            Es excelente la forma en la que te plantea un proceso de terapia, con fecha de inicio y de fin. 
                            Uno puede ir viendo los avances hacia una forma de pensar mas plena y más sana. Hasta el día de hoy, 
                            muchas veces me descubro, cuando tengo una emoción, aplicando las técnicas que me enseño.
                            Muchas gracias Osiris, eres una gran psicóloga y ser humano.</p>
                        <div class="testimonial-three__client-name">
                            <h4>Brenda C.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Ha sido una gran experiencia, me he sentido todo el tiempo, en un espacio seguro y de confianza, 
                            que me ha permitido expresarme, reflexionar, aprender y entender muchas cosas y procesos. 
                            Cada que puedo, recomiendo el acompañamiento de Osiris.</p>
                        <div class="testimonial-three__client-name">
                            <h4>Anónimo</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Ha sido una experiencia muy enriquecedora, siempre me he sentido validada . 
                            Puedo expresar mis sentimientos y todo lo que me sucede cada semana con toda la libertad y confianza. 
                            Nunca me he sentido juzgada , sino todo lo contrario, ha sido como un oasis en el desierto. 
                            Osiris me ha ayudado a irme encontrando y re-conocerme.</p>
                        <div class="testimonial-three__client-name">
                            <h4>Jazz I.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Excelente, me ayudo en mi forma de reaccionar a las situaciones que enfrento día a día, no enojarme como lo hacia, 
                            expresarme con los demás, pensar diferente, cambio algo de mí que ya no existe.</p>
                        <div class="testimonial-three__client-name">
                            <h4>Anónimo</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Al principio fue todo nuevo, es la primera vez que duro más de dos veces seguidas en terapia, y hasta ahora es una bonita experiencia. 
                            Es bueno ser escuchada y guiada, estar en terapia me ha ayudado, motivado y me hace sentir mejor.</p>
                        <div class="testimonial-three__client-name">
                            <h4>Jasmine Z.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
            <!--Testimonial one Single Start-->
            <div class="item">
                <div class="testimonial-three__single">
                    <div class="testimonial-three__img">
                        <img src="{{ asset('/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                        <div class="testimonial-three__quote">
                            <img src="{{ asset('/images/icon/icon-quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="testimonial-three__content">
                        <p class="testimonial-three__text">Excelente, todo muy bien</p>
                        <div class="testimonial-three__client-name">
                            <h4>Anónimo</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial one Single End-->
        </div>
    </div>
</section>
<!--Testimonial Three End-->

<!--Cases Three Start-->
<!--section class="cases-three" id="cases">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our recent work</span>
            <h2 class="section-title__title">Explore Our <span>Succesfully</span>
                <br> Completed Cases</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="cases-three__single">
                    <div class="cases-three__img-box">
                        <div class="cases-three__img">
                            <img src="{{ asset('/images/project/cases-3-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="cases-three__content">
                        <h3 class="cases-three__title"><a href="case-details.html">Depression and
                                <br> Anxiety</a></h3>
                        <ul class="cases-three__points list-unstyled">
                            <li>
                                <p><span>Signs:</span> Low Confidence</p>
                            </li>
                            <li>
                                <p><span>Customer:</span> Mike Hardson</p>
                            </li>
                            <li>
                                <p><span>Result:</span> 100% Stable</p>
                            </li>
                        </ul>
                        <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                            impedie.</p>
                        <div class="cases-three__btn-box">
                            <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="cases-three__single">
                    <div class="cases-three__img-box">
                        <div class="cases-three__img">
                            <img src="{{ asset('/images/project/cases-3-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="cases-three__content">
                        <h3 class="cases-three__title"><a href="case-details.html">Low Self Esteem
                                <br> Issues</a></h3>
                        <ul class="cases-three__points list-unstyled">
                            <li>
                                <p><span>Signs:</span> Low Confidence</p>
                            </li>
                            <li>
                                <p><span>Customer:</span> Mike Hardson</p>
                            </li>
                            <li>
                                <p><span>Result:</span> 100% Stable</p>
                            </li>
                        </ul>
                        <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                            impedie.</p>
                        <div class="cases-three__btn-box">
                            <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="cases-three__single">
                    <div class="cases-three__img-box">
                        <div class="cases-three__img">
                            <img src="{{ asset('/images/project/cases-3-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="cases-three__content">
                        <h3 class="cases-three__title"><a href="case-details.html">Personal Family
                                <br> Problem</a></h3>
                        <ul class="cases-three__points list-unstyled">
                            <li>
                                <p><span>Signs:</span> Low Confidence</p>
                            </li>
                            <li>
                                <p><span>Customer:</span> Mike Hardson</p>
                            </li>
                            <li>
                                <p><span>Result:</span> 100% Stable</p>
                            </li>
                        </ul>
                        <p class="cases-three__text">Lorem ipsum dolor sit amet, con tiam convallis elit id
                            impedie.</p>
                        <div class="cases-three__btn-box">
                            <a href="case-details.html" class="cases-three__btn thm-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section-->
<!--Cases Three End-->

<!--Blog Two Start-->
<section class="blog-two" id="blog">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Blogs</span>
            <h2 class="section-title__title">Los últimos
                <br> blogs</h2>
        </div>
        <div class="row">
            <!--Blog Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img-box">
                        <div class="blog-two__img">
                            <img src="{{ asset('/images/home-showcase/blog_.svg') }}" alt="">
                            <div class="blog-two__date">
                                <p>20
                                    <br> Mar</p>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog',['id' => 1]) }}">Recomendaciones para la mejorar la higiene del sueño</a></h3>
                        </div>
                    </div>
                    <div class="blog-two__comment-and-btn">
                        <div class="blog-two__comment">
                            <a href="blog-details.html"><span class="fas fa-comments"></span>0 Comentarios</a>
                        </div>
                        <div class="blog-one__btn">
                            <a href="blog-details.html"><span class="icon-right-arrow"></span>Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Two Single End-->
        </div>
    </div>
</section>
<!--Blog Two End-->
@endsection
