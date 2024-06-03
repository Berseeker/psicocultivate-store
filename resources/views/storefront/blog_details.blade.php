@extends('layouts/web.web')

@section('body', 'custom-cursor')

@section('content')

<!--Page Header Start-->
<section class="page-header" style="margin-top: 100px;">
    <div class="page-header-bg" style="background-image: url(/images/blog/slider_blog.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Sueño</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><span>/</span></li>
                <li>Detalles del Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
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
                            <li><a href="blog-details.html">Stress Management</a></li>
                            <li><a href="blog-details.html">Mental Health</a></li>
                            <li><a href="blog-details.html">Depressions</a></li>
                            <li><a href="blog-details.html">Therapies</a></li>
                            <li><a href="blog-details.html">Counseling</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__cases">
                        <h3 class="sidebar__title">Archivos</h3>
                        <div class="sidebar__cases-box">
                            <a href="{{ Storage::url('sleep.pdf') }}" target="_blank">Blog en PDF</a>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Comentarios</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <!--li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter
                                        <br> on Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on Template: <br> Comments</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A Wordpress Commenter on <br> Launch New Mobile App</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on Template: <br>
                                        Comments</p>
                                </div>
                            </li-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                        <div class="blog-details__date">
                            <p>20
                                <br> Mar</p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="blog-details__meta list-unstyled">
                            <li>
                                <a href="blog-details.html"><i class="fas fa-user-circle"></i>por Osiris Morales</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><i class="fas fa-comments"></i>0 Comentarios</a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title">Recomendaciones para la mejorar la higiene del sueño</h3>
                        <p class="blog-details__text-1">
                            1- Establece un horario de sueño <br>
                            Mi hora para despertar es:______<br>
                            Mi hora para dormir es:______<br>
                            Cambios en tu horario de dormir y despertar pueden alterar tu reloj de sueño.
                        </p>
                        <p class="blog-details__text-2">2- Desaceleración <br>
                            Evitar actividades que requieran esfuerzo físico o mental, al menos 2 horas antes de dormir. Esto permite al cuerpo y a la mente relajarse y prepararse para el descanso, mejora la calidad del sueño y a conciliarlo más fácilmente.
                        </p>
                        <p class="blog-details__text-2">3- Usar la cama solo para dormir <br>
                            No realices otra actividad que no sea dormir o relaciones eróticas/sexuales en la cama. Si la cama se usa habitualmente para actividades distintas al sueño (ver tv, redes sociales, comer, etc.), el cerebro lo asociará con estar despierto. Lo que sucede es que, sin querer, te estás entrenando para quedarte despierto en la cama. Con esto se busca que tu cerebro aprenda, que la cama es un lugar para dormir.
                        </p>
                        <p class="blog-details__text-2">4- Establecer un buen ambiente de descanso <br>
                            Recámara silenciosa y obscura, ropa ligera, temperatura adecuada y almohadas y sábanas cómodas. Un ambiente inadecuado de descanso puede provocar que te despiertes, afectando el ciclo del sueño. 
                        </p>
                        <p class="blog-details__text-2">5- En caso de insomnio, levántate <br>
                            Pasando los 20 min sin poder dormir, sal de la cama y ve a otro cuarto, evita hacer una actividad que requiera un esfuerzo físico o mental debido a que genera estimulación al sistema nervioso y afecta a que se concilie el sueño. Es preferible esperar hasta tener suficiente sueño para dormir. Permanecer en la cama y esforzarse por dormir puede generar frustración y ansiedad, además de entrenar al cuerpo a permanecer despierto en lugar de dormido.
                        </p>
                        <p class="blog-details__text-2">6- Evita preocuparte o planificar mientras estás en la cama <br>
                            Si tu mente está ocupada con pensamientos de preocupación o resolución de problemas, levántate y ve a otro lugar hasta que puedas dormir sin pensar en ello. Si esto ocurre a menudo, reserve un tiempo durante la tarde para realizar actividades mentales como planificación o preocupación. Esto puede ayudar a reducir los pensamientos mientras estás en la cama. 
                        </p>
                        <p class="blog-details__text-2">7- Evita tener siestas durante el día <br>
                            Evita las siestas durante el día, ya que satisfacen tus necesidades de sueño y pueden debilitar tu necesidad de dormir por la noche.
                        </p>
                        <p class="blog-details__text-2">8- Evita estar a la cama antes o después de tu horario de sueño <br>
                            Permanecer demasiado tiempo en la cama puede empeorar la calidad del sueño. Utiliza la hora asignada para dormir como guía y ve a la cama a partir de ese momento. Evita prolongar tu tiempo en la cama para mejorar tu descanso nocturno.
                        </p>
                        <p class="blog-details__text-2">9- Ingesta de bebidas y alimentos
                            Alimentos ligeros:  Intenta hacer una cena ligera  3 horas antes, que incluya alimentos como queso, leche, nueces o almendras. Estos alimentos contienen químicos que tu cuerpo produce para ayudarte a dormir
                            Cafeína: Evita consumir alimentos con cafeína 6 horas antes,  debido a que son estimulantes y provoca dificultades para dormir, algunos ejemplos son: café, té negro, refrescos o chocolates
                            Alcohol: Aunque las bebidas alcohólicas pueden inducir el sueño y hacer que te duermas más rápido, en realidad fragmentan tu sueño y lo hacen menos reparador. Por lo tanto, se recomienda evitar el consumo de alcohol por la tarde y no utilizarlo como ayuda para conciliar el sueño.
                            Nicotina: Actúa como un estimulante, aumentando la frecuencia cardíaca y la presión arterial, lo que dificulta conciliar el sueño. Además, fumar antes de acostarse puede exacerbar los problemas respiratorios, como la apnea del sueño, lo que interrumpe el ciclo de sueño profundo y restaurador.
                        </p>
                        <p class="blog-details__text-2">10- Realiza actividad física <br>
                            Hacer ejercicio durante la mañana o la tarde te dará una noche de sueño más profundo, aparte de que contribuye con tu bienestar físico y emocional.
                        </p>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Categoria</span>
                                <a href="#">Depression</a>
                                <a href="#">Addict</a>
                            </p>
                            <div class="blog-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!--div class="blog-details__pagenation">
                            <div class="blog-details__pagenation-left">
                                <div class="blog-details__pagenation-left-img">
                                    <img src="assets/images/blog/blog-details-pagenation-img-1.jpg" alt="">
                                </div>
                                <div class="blog-details__pagenation-left-content">
                                    <p class="blog-details__pagenation-left-date"><i class="fas fa-clock"></i>
                                        23 Mar, 2023</p>
                                    <h4 class="blog-details__pagenation-left-title"><a href="#">Get Deep
                                            Knowledge
                                            of Bipolar Disorder</a></h4>
                                </div>
                            </div>
                            <div class="blog-details__pagenation-right">
                                <div class="blog-details__pagenation-right-content">
                                    <p class="blog-details__pagenation-right-date"><i class="fas fa-clock"></i>
                                        23 Mar, 2023</p>
                                    <h4 class="blog-details__pagenation-right-title"><a href="#">How to Ensure
                                            Direct Treatment Hassle</a></h4>
                                </div>
                                <div class="blog-details__pagenation-right-img">
                                    <img src="assets/images/blog/blog-details-pagenation-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div-->
                        <div class="comment-one">
                            <h3 class="comment-one__title">0 Comentarios</h3>
                            <!--div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Kevin Martin</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia
                                        nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                        nulla, sollicitudin at euismod.</p>
                                    <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Sarah Albert</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia
                                        nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                        nulla, sollicitudin at euismod.</p>
                                    <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div-->
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Deja un comentario</h3>
                            <form action="assets/inc/sendemail.php"
                                class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Tu nombre" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Correo Electrónico" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Escribe un comentario"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Subir
                                                Comentario</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection
