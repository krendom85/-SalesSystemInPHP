<?php
use App\Models\Client;

  $client = new Client();
  $client->plan = 2;
?> 
@extends('template')

@section('content')
<header>
      <!-- inicio header-area  -->
      <div id="sticker" class="header-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <!-- Navegacion -->
              <nav class="navbar navbar-default">
                <!-- para visualizacion movil -->
                <div class="navbar-header">
                  <button
                    type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target=".bs-example-navbar-collapse-1"
                    aria-expanded="false"
                  >
                    <span class="sr-only">NAVEGACION</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Marca-->
                  <a
                    class="navbar-brand page-scroll sticky-logo"
                    href="index.html"
                  >
                    <h1><span>VILLACIS &</span> ASOCIADOS</h1>
                    <!--<img src="img/logo.jpg" alt="" title="" />-->
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
                    <li>
                      <a class="page-scroll" href="{{route('dashboard')}}">Login</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar-collapse -->
              </nav>
              <!-- Fin navegacion-->
            </div>
          </div>
        </div>
      </div>
      <!-- Fin header-area -->
    </header>
    <!-- Fin header  -->

    <!-- Inicio Slider Area -->
    <div id="home" class="slider-area">
      <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
          <img
            src="img/slider/slider1.jpg"
            alt=""
            title="#slider-direction-1"
          />
          <img
            src="img/slider/slider2.jpg"
            alt=""
            title="#slider-direction-2"
          />
          <img
            src="img/slider/slider3.jpg"
            alt=""
            title="#slider-direction-3"
          />
        </div>

        <!-- direccion1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                  <!-- layer 1 -->
                  <div
                    class="layer-1-1 hidden-xs wow slideInDown"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <h2 class="title1">nostros villacis & asociados</h2>
                  </div>
                  <!-- layer 2 -->
                  <div
                    class="layer-1-2 wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".1s"
                  >
                    <h1 class="title2">
                      Estamos para ayudar a mejorar su sistema finaciero
                    </h1>
                  </div>
                  <!-- layer 3 -->
                  <div
                    class="layer-1-3 hidden-xs wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <a class="ready-btn right-btn page-scroll" href="#services"
                      >SERVICIOS</a
                    >
                    <a class="ready-btn page-scroll" href="#about">Leer mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- direccion 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                  <!-- layer 1 -->
                  <div
                    class="layer-1-1 hidden-xs wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <h2 class="title1">VILLACIS & ASOCIADOS</h2>
                  </div>
                  <!-- layer 2 -->
                  <div
                    class="layer-1-2 wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".1s"
                  >
                    <h1 class="title2">
                      SOLUCIONES ADMINISTRATIVAS Y FINACIERAS
                    </h1>
                  </div>
                  <!-- layer 3 -->
                  <div
                    class="layer-1-3 hidden-xs wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <a class="ready-btn right-btn page-scroll" href="#services"
                      >SERVICIOS</a
                    >
                    <a class="ready-btn page-scroll" href="#about">Leer mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- direccion  3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                  <!-- layer 1 -->
                  <div
                    class="layer-1-1 hidden-xs wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <h2 class="title1">servicio de la mejor calidad</h2>
                  </div>
                  <!-- layer 2 -->
                  <div
                    class="layer-1-2 wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".1s"
                  >
                    <h1 class="title2">
                      Ayudando a la seguridad financiera y tanquilidad de tu
                      empresa
                    </h1>
                  </div>
                  <!-- layer 3 -->
                  <div
                    class="layer-1-3 hidden-xs wow slideInUp"
                    data-wow-duration="2s"
                    data-wow-delay=".2s"
                  >
                    <a class="ready-btn right-btn page-scroll" href="#services"
                      >SERVICIOS</a
                    >
                    <a class="ready-btn page-scroll" href="#about">Leer mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin Slider Area -->

    <!-- Inicio de  area  de acerca de-->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Acerca de Villacis & Asociados</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- inicio single-well-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="img/about/1.jpg" alt="" />
                </a>
              </div>
            </div>
          </div>
          <!-- fin single-well-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#"
                  ><h4 class="sec-head">Los servicios que desarrollamos</h4>
                </a>
                <p>
                  Somos profesionales que ofrecemos asesoramiento y ayuda en
                  cuestiones relacionadas con las capcitaciones y cumplimiento
                  de obligaciones tributarias.
                </p>
                <ul>
                  <li><i class="fa fa-check"></i> Asesoria en NIFF</li>
                  <li><i class="fa fa-check"></i> Asesoria Lbaoral</li>
                  <li><i class="fa fa-check"></i> Asesoria contable</li>
                  <li><i class="fa fa-check"></i> Asesoria tributaria</li>
                  <li><i class="fa fa-check"></i> Consultoria en procesos</li>
                  <li><i class="fa fa-check"></i> Declaracion de impuestos</li>
                  <li>
                    <i class="fa fa-check"></i> Clases de contabilidad
                    gurnamental
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Capacitacion en gestion publica
                    a GADS Parroquiales rurales
                  </li>
                </ul>
              </div>
              <div>
              <h4 class="sec-head">MISION</h4>
                </a>
                <p>
                  Somos profesionales que ofrecemos asesoramiento y ayuda en
                  cuestiones relacionadas con las capcitaciones y cumplimiento
                  de obligaciones tributarias.
                </p>
              </div>
              <div>
              <h4 class="sec-head">VISION</h4>
                </a>
                <p>
                  Somos profesionales que ofrecemos asesoramiento y ayuda en
                  cuestiones relacionadas con las capcitaciones y cumplimiento
                  de obligaciones tributarias.
                </p>
              </div>
            </div>
          </div>
          <!-- Fin columna sevicos-->
        </div>
      </div>
    </div>
    <!-- Fin de  area  de acerca de -->

    <!-- Inicio area de servicios -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Nuestros Servicios</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="services-contents">
            <!-- Start Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-calculator"></i>
                    </a>
                    <h4>asesoria en NIIF</h4>
                    <p>
                      Nuestro trabajo consiste en asesorar a su empresa en el
                      proceso implantación de dichas normas y asegurar el
                      cumplimiento efectivo de las disposiciones emitidas por
                      parte de la Superintendencia de Compañías..
                    </p>
                  </div>
                </div>
                <!-- Fin about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-briefcase"></i>
                    </a>
                    <h4>Asesoria Laboral</h4>
                    <p>
                      Se realizan trabajos de: Actas de Finiquito. Avisos de
                      Entrada. Avisos de Salida. Cálculos de Nómina. Planillas
                      de ajustes. Contratos de trabajo. Manejo del Sistema SUT.
                      Pagos IESS. Se realiza este trabajo un 70%.
                    </p>
                  </div>
                </div>
                <!--  Fin about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- Fin col-md-4 -->
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-archive"></i>
                    </a>
                    <h4>Asesoria Contable</h4>
                    <p>
                      dar clases de Contabilidad capacitado a las personas en
                      Contabilidad. Se brinda Capacitación de Contabilidad
                      Gubernamental. Contabilidad General. Se realiza este
                      trabajo un 40%.
                    </p>
                  </div>
                </div>
                <!-- Fin about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- Fin col-md-4 -->
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-bar-chart"></i>
                    </a>
                    <h4>Asesoria Tributaria</h4>
                    <p>
                      Nos dedicamos a orientar y ayudar a sus clientes en
                      relación con las obligaciones que tienen que cumplir en
                      materia de impuestos y contabilidad.
                    </p>
                  </div>
                </div>
                <!-- Fin about-details -->
              </div>
            </div>
            <!-- Fin Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- Fin col-md-4 -->
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-users"></i>
                    </a>
                    <h4>Consultoria de procesos</h4>
                    <p>
                      Se da capacitación para procesos de contratación pública.
                      Ínfima cuantía, capacitación y desarrollo = desde $60hasta
                      $500 Subasta inversa=desde los $500 hasta $1500
                      Licitación, Cotización y Consultoría = de cobra el 1% del
                      valor de la contrato Se realiza este trabajo un 10%
                    </p>
                  </div>
                </div>
                <!-- Fin about-details -->
              </div>
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-area-chart"></i>
                    </a>
                    <h4>Declaracion de impuestos</h4>
                    <p>
                      realización de impuestos. Declaración IVA formulario 104
                      persona natural mensual= $15 Impuesto IVA persona natural
                      semestral=$60 Impuesto a la renta persona natural anual=$5
                      Anexo de gastos personales=25
                    </p>
                  </div>
                </div>
                <!-- Fin about-details -->
              </div>
            </div>
            <!-- fin Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-handshake-o"></i>
                    </a>
                    <h4>Clases de contabilidad gubernamental</h4>
                    <p>
                      Clases de Contabilidad Gubernamental: clases en la
                      Normativa Contable. Registros de devengados cobrados y
                      pagados. Clases de estimación presupuestaria. Elaboración
                      de presupuesto. Precio de clase por hora $20
                    </p>
                  </div>
                </div>
                <!-- Fin sobre los detalles -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin area de servicios-->

    <!-- Area de habilidades o porcentaje-->
    <div class="our-skill-area fix hidden-sm">
      <div class="test-overly"></div>
      <div class="skill-bg area-padding-2">
        <div class="container">
          <!-- Fin encabezado sesion -->
          <div class="row">
            <div class="skill-text">
              <!-- Inicio de la habilidad-->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input
                      type="text"
                      class="knob"
                      value="0"
                      data-rel="95"
                      data-linecap="round"
                      data-width="175"
                      data-bgcolor="#fff"
                      data-fgcolor="#3EC1D5"
                      data-thickness=".20"
                      data-readonly="true"
                      disabled
                    />
                    <h3 class="progress-h4">asesoria tributaria</h3>
                  </div>
                </div>
              </div>
              <!-- fin de la habilidad -->
              <!-- Inicio de la habilidad -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input
                      type="text"
                      class="knob"
                      value="0"
                      data-rel="85"
                      data-linecap="round"
                      data-width="175"
                      data-bgcolor="#fff"
                      data-fgcolor="#3EC1D5"
                      data-thickness=".20"
                      data-readonly="true"
                      disabled
                    />
                    <h3 class="progress-h4">Asesoria trubutaria</h3>
                  </div>
                </div>
              </div>
              <!-- Fin de la habilidad -->
              <!-- Inicio de la habilidad -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input
                      type="text"
                      class="knob"
                      value="0"
                      data-rel="75"
                      data-linecap="round"
                      data-width="175"
                      data-bgcolor="#fff"
                      data-fgcolor="#3EC1D5"
                      data-thickness=".20"
                      data-readonly="true"
                      disabled
                    />
                    <h3 class="progress-h4">Consultoria de procesos</h3>
                  </div>
                </div>
              </div>
              <!-- Fin de la habilidad -->
              <!-- Inicio de la habilidad -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input
                      type="text"
                      class="knob"
                      value="0"
                      data-rel="65"
                      data-linecap="round"
                      data-width="175"
                      data-bgcolor="#fff"
                      data-fgcolor="#3EC1D5"
                      data-thickness=".20"
                      data-readonly="true"
                      disabled
                    />
                    <h3 class="progress-h4">
                      capcitaciones de gestioes publicas
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Fin de la habilidad -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin Area de habilidades o porcentaje -->

    <!-- Inicio del área de preguntas frecuentes -->
    <div class="faq-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Preguntas frecuentes</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="faq-details">
              <div class="panel-group" id="accordion">
                <!-- inicio Panel Default -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="check-title">
                      <a
                        data-toggle="collapse"
                        class="active"
                        data-parent="#accordion"
                        href="#check1"
                      >
                        <span class="acc-icons"></span>Como puedo adquirir el
                        servicio.
                      </a>
                    </h4>
                  </div>
                  <div id="check1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>
                        Para adquirir los servicios solo debes verificar cuales
                        son tus necesidades en tu negocio o empresa y escojer el
                        plan que deseas y dar en comprar
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Fin Panel Default -->
                <!-- inicio Panel Default -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="check-title">
                      <a
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#check2"
                      >
                        <span class="acc-icons"></span> metodos de pago que
                        aceptan
                      </a>
                    </h4>
                  </div>
                  <div id="check2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Por el momento aceptados tranferencias a distintos
                        bancos o depositos a las cuentas indicadas
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Fin Panel Default -->
                <!-- Inicio Panel Default -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="check-title">
                      <a
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#check3"
                      >
                        <span class="acc-icons"></span>Las asesorias son
                        precenciales o vistuales
                      </a>
                    </h4>
                  </div>
                  <div id="check3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Las asesorias las hacemos virtuales y precenciales</p>
                    </div>
                  </div>
                </div>
                <!-- Fin Panel Default -->
                <!-- inicio Panel Default -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="check-title">
                      <a
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#check4"
                      >
                        <span class="acc-icons"></span>Nos capacitaran en todo
                        sobre los asesoramientos trubitarios
                      </a>
                    </h4>
                  </div>
                  <div id="check4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Nostros enseñamos a todos nuetros clientes que lo puedan
                        realizar por si mismo todas sus declaraciones, pero si
                        necesitan de nuestros servicios tambien lo ayudamos con
                        su declaracion
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Fin Panel Default -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="tab-menu">
              <!-- Pestanas de navegacion -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="active">
                  <a href="#p-view-1" role="tab" data-toggle="tab">Poyecto</a>
                </li>
                <li>
                  <a href="#p-view-2" role="tab" data-toggle="tab"
                    >Planeacion</a
                  >
                </li>
                <li>
                  <a href="#p-view-3" role="tab" data-toggle="tab">Exito</a>
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane active" id="p-view-1">
                <div class="tab-inner">
                  <div class="event-content head-team">
                    <h4>Poyecto</h4>
                    <p>
                      Es un esfuerzo temporal y único, encaminado a alcanzar
                      objetivos específicos mediante la planificación,
                      organización y ejecución de un conjunto de actividades. Un
                      proyecto puede ser grande o pequeño, complejo o simple, y
                      puede ser llevado a cabo por una sola persona o por un
                      equipo de varias personas.
                    </p>
                    <p>
                      Los proyectos pueden ser de diferentes tipos, como
                      proyectos de construcción, desarrollo de software,
                      investigación, marketing, entre otros. Todos ellos tienen
                      en común que se inician con un objetivo específico y un
                      plan para alcanzarlo, y se cierran una vez que se han
                      alcanzado los objetivos.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="p-view-2">
                <div class="tab-inner">
                  <div class="event-content head-team">
                    <h4>Planeacion</h4>
                    <p>
                      Es el proceso mediante el cual se establecen metas y
                      objetivos a largo plazo, se desarrollan estrategias para
                      alcanzarlos y se crea un plan detallado para llevar a cabo
                      esas estrategias. La planificación es esencial para lograr
                      el éxito en cualquier proyecto o empresa, ya que ayuda a
                      asegurar que se están utilizando de manera eficiente los
                      recursos disponibles y a maximizar las oportunidades de
                      éxito.
                    </p>
                    <p>
                      es un proceso sistemático mediante el cual se establecen
                      metas y objetivos a largo plazo, se desarrollan
                      estrategias para alcanzarlos, y se crea un plan detallado
                      para llevar a cabo esas estrategias, es esencial para
                      lograr el éxito en cualquier proyecto o empresa.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="p-view-3">
                <div class="tab-inner">
                  <div class="event-content head-team">
                    <h4>Exito</h4>
                    <p>
                      El éxito se refiere a la consecución de metas y objetivos
                      deseados. Puede ser medido de diferentes maneras, como
                      financieramente, en términos de relaciones personales, en
                      el desempeño laboral, en el logro de metas personales,
                      entre otros. El éxito puede ser diferente para cada
                      persona y puede variar dependiendo de las metas y valores
                      individuales.
                    </p>
                    <p>
                      Para lograr el éxito se requieren esfuerzo, dedicación y
                      determinación. Es importante tener una visión clara de lo
                      que se quiere lograr, establecer metas realistas y
                      alcanzables, y diseñar un plan para alcanzarlas. Además,
                      es importante tener una mentalidad positiva, ser
                      resiliente ante los obstáculos y ser constantes en el
                      esfuerzo.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin de la fila -->
      </div>
    </div>
    <!-- Fin del área de preguntas frecuentes -->

    <!-- Inicio Área de Bienvenida -->
    <div class="wellcome-area">
      <div class="well-bg">
        <div class="test-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="wellcome-text">
                <div class="well-text text-center">
                  <h2>Bienvenidos a nuestra empresa</h2>
                  <p>
                    suscribete para poder recibir mas noticias sobre finanzas
                  </p>
                  <div class="subs-feilds">
                  <form href="{{route('pendingClients.store')}}" method="POST">
                    @csrf 
                    <div class="suscribe-input">
                      <input
                        type="email"
                        name="email"
                        class="email form-control width-80"
                        id="sus_email"
                        placeholder="Email"
                      />
                      <button
                        type="submit"
                        id="sus_submit"
                        class="add-btn width-20"
                      >
                        Subscribir
                      </button>
                    </form>
                      <div id="msg_Submit" class="h3 text-center hidden"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de Área de Bienvenida-->

    <!-- Inicio area de equipo -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Nuestro equipo</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="team-top">
            
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a href="#">
                    <img src="img/team/jimena villacis.jpg" alt="" />
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Jimena Villacis</h4>
                  <p>Contadora</p>
                </div>
              </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a href="#">
                    <img src="img/team/kelly cacay.jpg" alt="" />
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Kelly Cacay</h4>
                  <p>SEO</p>
                </div>
              </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a href="#">
                    <img src="img/team/jimena villaciss.jpg" alt="" />
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Jimena Vilaciss</h4>
                  <p>Contadora</p>
                </div>
              </div>
            </div>
            <!-- Fin de columna -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a href="#">
                    <img src="img/team/magaly guato.jpg" alt="" />
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>magaly Guato</h4>
                  <p>Contadora</p>
                </div>
              </div>
            </div>
            <!-- Fin de columna -->
          </div>
        </div>
      </div>
    </div>
    <!-- Fin area de equipo-->

    <!-- Inicio area de reviews -->
    <div class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <a href="#">
            <img src="img/about/2.jpg" alt="" />
          </a>
        </div>
        <div class="work-right-text text-center">
          <h2>Trabaja con nostros</h2>
          <h5>Consultor, Contador, ETC</h5>
          <a href="#contact" class="ready-btn">Contacta con nosotras</a>
        </div>
      </div>
    </div>
    <!-- End reviews Area -->

    <!-- Inicio de portafolio -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>nuestro portafolio</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!--Inicio portafolio -page1 -->
          <div class="awesome-project-1 fix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="awesome-menu">
                <ul class="project-menu">
                  <li>
                    <a href="#" class="active" data-filter="*">Todo</a>
                  </li>
                  <li>
                    <a href="#" data-filter=".development">Contaduria</a>
                  </li>
                  <li>
                    <a href="#" data-filter=".design">Consultoria</a>
                  </li>
                  <li>
                    <a href="#" data-filter=".photo">Declaracioness</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="awesome-project-content">
            <!-- Inicio de portafolio cada uno -->
            <div class="col-md-4 col-sm-4 col-xs-12 design development">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/1.jpg"
                      >
                        <h4>Contaduria</h4>
                        <span>Desarrollo de informes de contabilidad, etc</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de portafolio cada uno -->
            <!-- Inicio de portafolio cada uno -->
            <div class="col-md-4 col-sm-4 col-xs-12 photo">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/2.jpg"
                      >
                        <h4>Consultorias</h4>
                        <span>Consultas todo sobre los temas a tratar</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de portafolio cada uno -->
            <!-- Inicio de portafolio cada uno -->
            <div class="col-md-4 col-sm-4 col-xs-12 design">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/3.jpg"
                      >
                        <h4>Declaraciones</h4>
                        <span>Todo lo realcionado sobre declaraciones</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de portafolio cada uno -->
            <!-- Inicio de portafolio cada uno-->
            <div class="col-md-4 col-sm-4 col-xs-12 photo development">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/4.jpg" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/4.jpg"
                      >
                        <h4>Clases de contabilidad</h4>
                        <span
                          >Todo sobre la contabilidad trubutaria en el
                          Ecuador</span
                        >
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de portafolio cada uno -->
            <!-- Inicio de portafolio cada uno-->
            <div class="col-md-4 col-sm-4 col-xs-12 development">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/5.jpg" alt="" /></a>
                  <div class="add-actions text-center text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/5.jpg"
                      >
                        <h4>Contabilidad Gubernamental</h4>
                        <span>Contabilidad para los gobiernos</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de portafolio cada uno -->
            <!-- Inicio de portafolio cada uno-->
            <div class="col-md-4 col-sm-4 col-xs-12 design photo">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="img/portfolio/6.jpg" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a
                        class="venobox"
                        data-gall="myGallery"
                        href="img/portfolio/6.jpg"
                      >
                        <h4>Ministerio de trabajo</h4>
                        <span
                          >Todo sobre contratos para el ministerio del
                          trabajo</span
                        >
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin de porfolio-->
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de portafolio-->
    <!-- Inicio are de previos -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Tabla de precios</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>
                basico <br />
                <span>$80 / month</span>
              </h3>
              <ol>
                <li class="check">Asesoria en NIIF</li>
                <li class="check">Asesoria Laboral</li>
                <li class="check">Asesoria Contable</li>
                <li class="check">Asesoria Tributaria</li>
                <li class="check cross">Consultoria en procesos</li>
                <li class="check cross">Declaraciones de impuestos</li>
                <li class="check cross">
                  Clases de contabilidad Gubernamental
                </li>
                <li class="check cross">
                  Capacitacion en gestion publica a GADS parroquiales rurales
                </li>
              </ol>
              <button><a href="{{route('clients.create',$client)}}">Comprar</a></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-1555">
            <div class="pri_table_list active">
              <span class="saleon">mas top</span>
              <h3>
                standard <br />
                <span>$110 / month</span>
              </h3>
              <ol>
                <li class="check">Asesoria en NIIF</li>
                <li class="check">Asesoria Laboral</li>
                <li class="check">Asesoria Contable</li>
                <li class="check">Asesoria Tributaria</li>
                <li class="check cross">Consultoria en procesos</li>
                <li class="check">Declaraciones de impuestos</li>
                <li class="check">Clases de contabilidad Gubernamental</li>
                <li class="check cross">
                  Capacitacion en gestion publica a GADS parroquiales rurales
                </li>
              </ol>
              <button><a href="{{route('clients.create',$client)}}">Comprar</a></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>
                premium <br />
                <span>$150 / month</span>
              </h3>
              <ol>
                <li class="check">Asesoria en NIIF</li>
                <li class="check">Asesoria Laboral</li>
                <li class="check">Asesoria Contable</li>
                <li class="check">Asesoria Tributaria</li>
                <li class="check">Consultoria en procesos</li>
                <li class="check">Clases de contabilidad Gubernamental</li>
                <li class="check">Clases de contabilidad Gubernamental</li>
                <li class="check">
                  Capacitacion en gestion publica a GADS parroquiales rurales
                </li>
              </ol>
              <button><a href="{{route('clients.create')}}">Comprar</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin area de precios-->
    <!-- Inicio de testimonios-->
    <div class="testimonials-area">
      <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Inicio de terminonios totales -->
              <div class="testimonial-content text-center">
                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                <!-- Inicio de tetimonios en carrusel -->
                <div class="testimonial-carousel">
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Una empresa muy seria que nos enseña sin reservarse
                        nada.<br />
                        por eso me aprece una de las mejores empresas en los
                        servicios brindados
                      </p>
                      <h6>Emilio</h6>
                    </div>
                  </div>
                  <!-- Fin de comentario -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Empresa muy seria y muy puntal en todas sus entregas<br />Se
                        recomienda al 100%
                      </p>
                      <h6>Juan</h6>
                    </div>
                  </div>
                  <!-- Fin de comentario-->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Siempre nos ayudan con las dudas que tengamos<br />el
                        mejor servicio que se pueda tener
                      </p>
                      <h6>Edwin</h6>
                    </div>
                  </div>
                  <!-- Fin de comentarios-->
                </div>
              </div>
              <!-- Fin del area de testimonios -->
            </div>
            <!-- Fin Característica  derecha-->
          </div>
        </div>
      </div>
    </div>
    <!-- Fun de los testimonios-->
    <!-- Inicio del area blog -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Últimas noticias</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Inicio blog izquierda-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/1.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 commentarios</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2023-01-05 / 21:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html"
                      >10 pasos para llevar una contabilidad sana</a
                    >
                  </h4>
                  <p>
                    Establecer un sistema de contabilidad: Es importante tener
                    un sistema de contabilidad en el lugar para registrar las
                    transacciones financieras de manera ordenada y precisa.
                    <br />Seleccionar un software contable: Es importante
                    seleccionar un software contable que se ajuste a las
                    necesidades de la empresa y sea fácil de usar. Establecer un
                    calendario de contabilidad: Es importante e
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Leer Mas</a>
                </span>
              </div>
              <!--Fin blog izquierda -->
            </div>
            <!-- Fin blog izquierda-->
            <!-- Inicio blog medio -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/2.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">3 comenarios</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2022-12-05 / 13:02:12
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Como tener mejor manejo de dinero.</a>
                  </h4>
                  <p>
                    Tener un mejor manejo de dinero implica establecer metas
                    financieras, planificar y controlar los gastos, y ahorrar e
                    invertir de manera inteligente. Aquí hay algunos pasos que
                    puedes seguir para mejorar tu manejo del dinero: <br />1.
                    Establece metas financieras a corto y largo plazo.
                    Identifica lo que quieres lograr financieramente y establece
                    metas para alcanzarlos.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Leer Mas</a>
                </span>
              </div>
              <!-- fin blog -->
            </div>
            <!-- Fin Blomedio-->
            <!-- Inicio Blog derecha-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/3.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">9 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2023-01-22 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">5 pasos para salir de deudas</a>
                  </h4>
                  <p>
                    1. Haga una lista de sus deudas: Anote todas sus deudas,
                    incluyendo el tipo de deuda, el monto total y la tasa de
                    interés. Esto le dará una idea clara de su situación
                    financiera y le ayudará a priorizar sus deudas.<br />
                    2. Establezca un presupuesto: Establezca un presupuesto y
                    trate de reducir sus gastos para poder dedicar más dinero a
                    pagar sus deudas.<br />
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Leer mas</a>
                </span>
              </div>
            </div>
            <!-- Fin  Blog derecha-->
          </div>
        </div>
      </div>
    </div>
    <!-- Fin Blog -->

    <!-- Inicio Area de contacto -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contacto</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Inicio columna de icono de contacto -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>
                    telefono: +593 99 550 1440<br />
                    <span>lunes a viernes (8am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Inicio columna de icono de contacto -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    Email: villacis.asociados@gmail.com<br />
                    <span>Web: www.Villacisyasociados.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Inicio columna de icono de contacto -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Direccion: Alóag. Vía Al Corazón. Barrio El Cortijo<br />
                    <span>Provincia Pichincha. Cantón Mejía</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Inicio Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- inicio  mapa -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.658553630719!2d-78.568438685445!3d-0.5127499996259092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd13fcbedf0a2dac5!2zMMKwMzAnNDUuOSJTIDc4wrAzMyc1OC41Ilc!5e0!3m2!1ses!2sec!4v1674531571967!5m2!1ses!2sec"
                width="100%"
                height="380"
                frameborder="0"
                style="border: 0"
                allowfullscreen
              ></iframe>
              <!-- Fin mapa -->
            </div>
            <!-- Fin Google Map -->

            <!-- Inicio contacto -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <div id="sendmessage">
                  Tu mensaje ha sido enviado. ¡Gracias!
                </div>
                <form action ="{{route('futureEmployees.store')}}" method="post" role="form" class="contactForm">
                  @csrf 
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Nombre"
                      data-rule="minlen:4"
                      data-msg="Por favor ingrese al menos 4 caracteres"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Correo"
                      data-rule="email"
                      data-msg="Por favor introduzca una dirección de correo electrónico válida"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="job"
                      id="subject"
                      placeholder="Puesto de trabajo"
                      data-rule="minlen:4"
                      data-msg="Ingrese al menos 8 caracteres de asunto"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="cellphone"
                      id="subject"
                      placeholder="Telefono"
                      data-rule="minlen:4"
                      data-msg="Ingrese al menos 8 caracteres de asunto"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      name="description"
                      rows="5"
                      data-rule="required"
                      data-msg="Escribe un mensaje que necesites"
                      placeholder="Descripcion"
                    ></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Enviar mensaje</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Finalizar contacto de la  izquierda -->
          </div>
        </div>
      </div>
    </div>
    <!-- Fin area de contacto -->

    <!-- Inicio del area inferior el pie de pagina -->
    <footer>
      <div class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <div class="footer-logo">
                    <h2><span>VILLACIS &</span>ASOCIADOSS</h2>
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
                        <a href="https://www.facebook.com/RANGERLEO"><i class="fa fa-facebook"></i></a>
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
                      <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <h4>Informacion</h4>
                  <p>
                    Para cualquier consulta o informacion nos pueden contacrar a
                    los datos brindados.
                  </p>
                  <div class="footer-contacts">
                    <p><span>Tel:</span> +593 99 550 1440</p>
                    <p><span>Email:</span> villacis.asociados@gamil.com</p>
                    <p><span>Horaio de atencion:</span> 8am-5pm</p>
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