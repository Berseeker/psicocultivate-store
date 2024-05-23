<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-y">
        <!--img src="{{ asset('/images/shapes/site-footer-shape-1.png') }}" alt=""-->
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__top-left">
                    <div class="site-footer__top-icon">
                        <span class="icon-business-people"></span>
                    </div>
                    <div class="site-footer__top-content">
                        <h3>Horario de atención: <span>Lunes a Viernes 10:00am - 1:00pm / 4:00pm - 8:00pm (GMT -5)</span></h3>
                    </div>
                </div>
                <div class="site-footer__top-right">
                    <div class="site-footer__social-shape-1 float-bob-y">
                        <img src="{{ asset('/images/shapes/site-footer-social-shape.png') }}" alt="" class="zoom-fade">
                    </div>
                    <div class="site-footer__social-title">
                        <p>Sígueme:</p>
                    </div>
                    <div class="footer_redes_sociales">
                        <a href="https://www.facebook.com/psIcoCultivate" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/psico_cultivate/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@psico_cultivate?_t=8mOA17ObW7s&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.linkedin.com/in/osiris-morales-ruiz-Psicocultivate/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="site-footer__middle">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="{{ route('inicio') }}"><img src="{{ asset('images/logos/white_psicocultivate.svg') }}" alt=""></a>
                        </div>
                        <p class="footer-widget__about-text">Un espacio de crecimiento.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Explora</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            <li><a href="{{ route('about') }}">Sobre mí</a></li>
                            <li><a href="{{ route('appointment') }}">Haz una cita</a></li>
                            <li><a href="{{  route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('team') }}">Comunidad</a></li>
                            <!--li><a href="faq.html">Faqs</a></li-->
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__Contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contacto</h3>
                        </div>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <!--li>
                                <div class="icon">
                                    <span class="fas fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <span>Visit Office</span>
                                    <p>66 Broklyn Gold Street. USA</p>
                                </div>
                            </li-->
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <span>Enviar Email</span>
                                    <p><a href="mailto:osiris@psicocultivate.com">osiris@psicocultivate.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                                <div class="text">
                                    <span>Teléfono</span>
                                    <p><a href="https://api.whatsapp.com/send?phone=529982901735" target="_blank">+52 (998) - 290 1735</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Boletín informativo</h3>
                        </div>
                        <p class="footer-widget__newsletter-text">Suscribete a nuestro boletín para obtener las últimas noticias</p>
                        <form class="footer-widget__email-box" data-url="MC_FORM_URL">
                            <div class="footer-widget__email-input-box">
                                <input type="email" placeholder="Email address" name="email">
                            </div>
                            <button type="submit" class="footer-widget__subscribe-btn thm-btn">Register
                                Yourself</button>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Company.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
