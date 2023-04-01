@extends('template')

@section('content')
<header>
  <!-- inicio de head-->
  <div id="sticker" class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <!-- Navegacion -->
          <nav class="navbar navbar-default">
            <!-- Marca y alterna se agrupan para una mejor visualización móvil -->
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target=".bs-example-navbar-collapse-1"
                aria-expanded="false"
              >
                <span class="sr-only">Villacisyasociados</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Marca -->
              <a
                class="navbar-brand page-scroll sticky-logo"
                href="index.html"
              >
                <h1><span>Villacis &</span>ASOCIADOS</h1>

                <!-- <img src="img/logo.png" alt="" title=""> -->
              </a>
            </div>
            <!-- enlaces de navegación, formularios y otro contenido -->
            <div
              class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
              id="navbar-example"
            >
              <ul class="nav navbar-nav navbar-right">
                <li class="active">
                  <a class="page-scroll" href="#home">Inicio</a>
                </li>
                <li>
                  <a class="page-scroll" href="#about">Acerca de</a>
                </li>
                <li>
                  <a class="page-scroll" href="#services">Servicios</a>
                </li>
                <li>
                  <a class="page-scroll" href="#team">Equipo</a>
                </li>
                <li>
                  <a class="page-scroll" href="#portfolio">Logros</a>
                </li>
                <li>
                  <a class="page-scroll" href="#blog">Blog</a>
                </li>
                <li>
                  <a class="page-scroll" href="#contact">Contacto</a>
                </li>
              </ul>
            </div>
            <!-- navbar-collapse -->
          </nav>
          <!-- FIn navegacion -->
        </div>
      </div>
    </div>
  </div>
  <!-- Fin header-area -->
</header>
<!-- Fin header  -->

<!-- Inicio Bottom Header -->
<div class="header-bg page-area">
  <div class="home-overly"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom">
            <div
              class="layer2 wow zoomIn"
              data-wow-duration="1s"
              data-wow-delay=".4s"
            >
              <h1 class="title2">My Blog</h1>
            </div>
            <div
              class="layer3 wow zoomInUp"
              data-wow-duration="2s"
              data-wow-delay="1s"
            >
              <h2 class="title3">Blog profecional</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Header  -->
<div class="blog-page area-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="page-head-blog">
          <div class="single-blog-page">
            <!-- Inicio Opcion search -->
            <form action="#">
              <div class="search-option">
                <input type="text" placeholder="Search..." />
                <button class="button" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
            <!--Fin Opcion search-->
          </div>
          <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
              <h4>Post Reciente</h4>
              <div class="recent-post">
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                      <img src="img/blog/1.jpg" alt="" />
                    </a>
                  </div>
                  <div class="pst-content">
                    <p>
                      <a href="#">
                        10 pasos para llevar una contabilidad sana</a
                      >
                    </p>
                  </div>
                </div>
                <!-- Fin de post -->
                <!-- Inicio de post  -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                      <img src="img/blog/2.jpg" alt="" />
                    </a>
                  </div>
                  <div class="pst-content">
                    <p>
                      <a href="#"> Como tener mejor manejo de dinero.</a>
                    </p>
                  </div>
                </div>
                <!-- Fin de post  -->
                <!-- Inicio de post-->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                      <img src="img/blog/3.jpg" alt="" />
                    </a>
                  </div>
                  <div class="pst-content">
                    <p>
                      <a href="#"> 5 pasos para salir de deudas</a>
                    </p>
                  </div>
                </div>
                <!-- Fin de post -->
                <!-- Inicio de post-->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                      <img src="img/blog/4.jpg" alt="" />
                    </a>
                  </div>
                  <div class="pst-content">
                    <p>
                      <a href="#">
                        Como declarar correctamente tus impuestos</a
                      >
                    </p>
                  </div>
                </div>
                <!--  Fin de post  -->
              </div>
            </div>
            <!-- Fin recientes -->
          </div>
          <div class="single-blog-page">
            <div class="left-blog">
              <h4>categorias</h4>
              <ul>
                <li>
                  <a href="#">portafolio</a>
                </li>
                <li>
                  <a href="#">Acerca de Villacis & Asociados</a>
                </li>
                <li>
                  <a href="#">Asesoria en NIIF</a>
                </li>
                <li>
                  <a href="#">Asesria laboral</a>
                </li>
                <li>
                  <a href="#">Asesoria Contable</a>
                </li>
                <li>
                  <a href="#">Asesoria Tributaria</a>
                </li>
                <li>
                  <a href="#">Consultoria de procesos</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="single-blog-page">
            <div class="left-blog">
              <h4>Archivados</h4>
              <ul>
                <li>
                  <a href="#">07 Agosto 2022</a>
                </li>
                <li>
                  <a href="#">29 Julio 2022</a>
                </li>
                <li>
                  <a href="#">13 Mayo 2022</a>
                </li>
                <li>
                  <a href="#">16 abril 2022</a>
                </li>
                <li>
                  <a href="#">09 de marzo 2022</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="single-blog-page">
            <div class="left-tags blog-tags">
              <div class="popular-tag left-side-tags left-blog">
                <h4>Tags populares</h4>
                <ul>
                  <li>
                    <a href="#">Portafolio</a>
                  </li>
                  <li>
                    <a href="#">Contabilidad</a>
                  </li>
                  <li>
                    <a href="#">declaraciones</a>
                  </li>
                  <li>
                    <a href="#">asesoria contable</a>
                  </li>
                  <li>
                    <a href="#">gubernamental</a>
                  </li>
                  <li>
                    <a href="#">Consultorias</a>
                  </li>
                  <li>
                    <a href="#">calases contabilidad</a>
                  </li>
                  <li>
                    <a href="#">Ministerio de trabajo</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fin sidebar -->
      <!-- Inicio de  blog -->
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- inicio de blog uno -->
            <article class="blog-post-wrapper">
              <div class="post-thumbnail">
                <img src="{{$post->url}}" alt="img_post" />
              </div>
              <div class="post-information">
                <h2>{{$post->title}}</h2>
                <div class="entry-meta">
                  <span class="author-meta"
                    ><i class="fa fa-user"></i> <a href="#">admin</a></span
                  >
                  <span><i class="fa fa-clock-o"></i> enero 15, 2023</span>
                  <span class="tag-meta">
                    <i class="fa fa-folder-o"></i>
                    <a href="#">contabilidad</a>,
                    <a href="#">finaciero</a>
                  </span>
                  <span>
                    <i class="fa fa-tags"></i>
                    <a href="#">declaraciones</a>,
                    <a href="#"> contabilidad</a>,
                    <a href="#">finaciera</a>
                  </span>
                  <span
                    ><i class="fa fa-comments-o"></i>
                    <a href="#">13 comentarios</a></span
                  >
                </div>
                <div class="entry-content">     
                  <p style="text-align: justify;"><?php echo nl2br($post->post)?></p>
                </div>
              </div>
            </article>
            <div class="clear"></div>
            <div class="single-post-comments">
              <div class="comments-area">
                <div class="comments-heading">
                  <h3>3 comentarios</h3>
                </div>
                <div class="comments-list">
                  <ul>
                    <li class="threaded-comments">
                      <div class="comments-details">
                        <div class="comments-list-img">
                          <img src="img/blog/b02.jpg" alt="post-author" />
                        </div>
                        <div class="comments-content-wrap">
                          <span>
                            <b><a href="#">edwin</a></b>
                            Post autor
                            <span class="post-time"
                              >Enero 15, 2023 hora 4:25 pm</span
                            >
                            <a href="#">Reply</a>
                          </span>
                          <p>
                            Los consejos que se deberian enseñar a diario
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="comments-details">
                        <div class="comments-list-img">
                          <img src="img/blog/b02.jpg" alt="post-author" />
                        </div>
                        <div class="comments-content-wrap">
                          <span>
                            <b><a href="#">admin</a></b>
                            Post autor
                            <span class="post-time"
                              >Enero 16, 2023 hora 6:15 pm
                            </span>
                            <a href="#">Respuesta</a>
                          </span>
                          <p>
                            Estamo sencantados de compartir los
                            conocimientos que nos a servido en nuestra
                            empresa y a nuestos clientes
                          </p>
                        </div>
                      </div>
                    </li>
                    <li class="threaded-comments">
                      <div class="comments-details">
                        <div class="comments-list-img">
                          <img src="img/blog/b02.jpg" alt="post-author" />
                        </div>
                        <div class="comments-content-wrap">
                          <span>
                            <b><a href="#">demo</a></b>
                            Post autor
                            <span class="post-time"
                              >enero 17, 2023 hora 10:25 am</span
                            >
                            <a href="#">Respuesta</a>
                          </span>
                          <p>
                            Sigan asi de esa forma compartiendo su
                            conocimiento estoy muy agardecido
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="comment-respond">
                <h3 class="comment-reply-title">Deja una respuesta</h3>
                <span class="email-notes"
                  >*Su dirección de correo electrónico no será publicada.
                  Los campos obligatorios están marcados*</span
                >
                <form action="#">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <p>Nombre *</p>
                      <input type="text" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <p>Email *</p>
                      <input type="email" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <p>Sitio Web</p>
                      <input type="text" />
                    </div>
                    <div
                      class="col-lg-12 col-md-12 col-sm-12 comment-form-comment"
                    >
                      <p>Comentario</p>
                      <textarea
                        id="message-box"
                        cols="30"
                        rows="10"
                      ></textarea>
                      <input type="submit" value="Publicar Comentario" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Fin de blog -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin area Blog  -->
<div class="clearfix"></div>

<!--Inicio Footer bottom Area -->
<footer>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <h2><span>VILLACIS &</span>ASOCIADOS</h2>
              </div>

              <p>
                una microempresa que se dedica a la gestión administrativa y
                financiera tanto para el sector privado como. Público que
                cuenta con un talento humano eficiente y capacitado que
                garantiza la ejecución de nuestro trabajo.
              </p>
              <div class="footer-icons">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin footer -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <h4>Informacion</h4>
              <p>
                Para cualquier consulta o informacion nos pueden contacrar a
                los datos brindados
              </p>
              <div class="footer-contacts">
                <p><span>Tel:</span> +593 99 550 1440</p>
                <p><span>Email:</span> villacisyasociados@ejemplo.com</p>
                <p><span>Horario de atencion:</span> 8am-5pm</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end single footer -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <h4>Instagram</h4>
              <div class="flicker-img">
                <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
                <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
                <a href="#"><img src="img/portfolio/4.jpg" alt="" /></a>
                <a href="#"><img src="img/portfolio/5.jpg" alt="" /></a>
                <a href="#"><img src="img/portfolio/6.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>
              &copy; Copyright <strong>villacisyasociados</strong>. All
              Rights Reserved
            </p>
          </div>
          <div class="credits">
            Disenado por
            <a href="edwin&almache">Villacisyasociados</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@endsection