
<?php 
include("conexion.php");  

?>





<!DOCTYPE html>
<html lang="es">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MINISTERIO DE EDUCACIÓN METODISTA</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="img/logomem.jpg">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper">
      <!-- COLOR BAR -->


      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-6 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope " style="background-color:#4c664c " aria-hidden="true"></i> <a href="mailto:info@yourdomain.com">contacto@mem.cl</a></li>
                <li><i class="fa fa-phone " style="background-color:#4c664c " aria-hidden="true"></i> +56 9 1234 5678</li>
                <li><i class="fa fa-clock-o" style="background-color:#4c664c " aria-hidden="true"></i> Horario 8:00 a 18:00</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li><i class="fa fa-globe" style="background-color:#4c664c " aria-hidden="true"></i></li>
                <li class="LanguageList">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option>Español </option>
                    <!--<option value="2">English</option>-->

                  </select>
                </li>
                <!--<li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='#loginModal' data-toggle="modal" >Ingresar</a><span>o</span><a href='#createAccount' data-toggle="modal">Crear una cuenta</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logomem.png" alt="MEM-CHILE"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-home bg-color-3" aria-hidden="true"></i> <span class="active">Inicio</span>
                </a>
              </li>

              <li class=" dropdown singleDrop color-3 ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-file-text bg-color-3" aria-hidden="true"></i> <span>Colegios</span></a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Norte</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('norte');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="product.html"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Norte Verde</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('norte verde');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="product.html"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Metropolitano</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('metropolitano');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="product.html"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Concepción</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('concepcion');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="product.html"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Sur</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('sur');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="product.html"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>                                   
                </ul>
              </li>




              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>Nosotros</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">Misión y Visión</a></li>
                  <li><a href="#">Equipo Directivo</a></li>
                  <li><a href="#">Proyecto Educativo</a></li>
                </ul>
                
              </li>

              <li class="dropdown singleDrop color-3 ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-3" aria-hidden="true"></i>
                  <span>Documentos</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!--
                  <li class="dropdown dropdown-submenu
                     ||
                     ||
                     ">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown">Products
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="product.html">Products Fullwidth</a></li>
                      <li class=""><a href="product-left-sidebar.html">Products Left Sidebar</a></li>
                      <li class=""><a href="product-right-sidebar.html">Products Right Sidebar</a></li>
                    </ul>
                  </li>
                  -->
                  <li class=""><a href="documentos/reglamentointerno.pdf">Reglamento Interno</a></li>
                </ul>
              
              </li>
              <li class="dropdown singleDrop color-3  ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-3" aria-hidden="true"></i>
                  <span>Eventos</span>
                </a>
                <!--
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu
                     ||
                    
                    
                  ">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="blog-grid.html">Blog Grid Fullwidth</a></li>
                      <li class=""><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                      <li class=""><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu
                     ||
                     ||
                     ">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List
                    </a>
                    <ul class="dropdown-menu">
                      <li class="" ><a href="blog-list.html">Blog List Fullwidth</a></li>
                      <li class=""><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                      <li class=""><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu
                     ||
                     ||
                     ">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="single-blog.html">Single Blog Fullwidth</a></li>
                      <li class=""><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                      <li class=""><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
                -->
              </li>
            <!--    
              <li class="dropdown singleDrop color-3 ">
                <a href="javascript:void(0)"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-3" aria-hidden="true"></i><span>Contacto</span></a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class=" "><a href="accordion-toggles.html">Accordions &amp; Toggles</a></li>
                  <li class=""><a href="tabs-dropdown.html">Tabs &amp; Dropdowns</a></li>
                  <li class=" "><a href="alert-label-badges.html">Alert-Label-badges</a></li>
                  <li class=" "><a href="progress-bar.html">Progress Bar</a></li>
                  <li class=" "><a href="buttons.html">Buttons</a></li>
                  <li class=" "><a href="forms.html">Forms</a></li>
                  <li class=" "><a href="list-panel.html">Listgroups Panel</a></li>
                  <li class=" "><a href="tooltip-pagination.html">Tooltip Pagination</a></li>
                  <li class=" "><a href="typography.html">Typography</a></li>
                  <li class=" "><a href="responsive-embed.html">Responsive Embed</a></li>
                </ul>
              </li>-->
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV1">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/equipo_mem.jpeg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="200"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  MEM
                </div>

                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="265"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Ministerio de Educación Metodista <br>
                  Chile 2018
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="img/equipo_mem2.jpeg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="200"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  MEM
                </div>

                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="265"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Ministerio de Educación Metodista <br>
                  Chile 2018
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="img/home/slider/slider-3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-right"
                  data-hoffset="0"
                  data-y="200"
                  data-x="right"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  MEM
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="0"
                  data-y="265"
                  data-x="right"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Ministerio de Educación Metodista <br>
                  Chile 2018
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="img/home/slider/slider-4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="200"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  MEM
                </div>

                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="265"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Ministerio de Educación Metodista <br>
                  Chile 2018
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="clearfix linkSection hidden-xs">
      <div class="sectionLinkArea hidden-xs scrolling">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <a href="#ourCourses" class="sectionLink bg-color-3" id="coursesLink">
                <i class="fa fa-calendar linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">Eventos</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="#ourTeam" class="sectionLink bg-color-3" id="teamLink">
                <i class="fa fa-users linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">Directiva</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="#ourGallery" class="sectionLink bg-color-3" id="galleryLink">
                <i class="fa fa-picture-o linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">Galería</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="#latestNews" class="sectionLink bg-color-3" id="newsLink">
                <i class="fa fa-newspaper-o linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">Noticias</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURE SECTION -->
    <section class="mainContent full-width clearfix featureSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Nuestro Objetivo</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-5">
                <i class="fa fa-line-chart bg-color-5" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-5">Crecimiento Educativo</h3>
                <p>Potenciar el crecimiento y desarrollo de todas las unidades educativas
                    afiliadas.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-2">
                <i class="fa fa-leaf bg-color-2" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-2">Directrices Educacionales</h3>
                <p>Establecer, ejecutar y supervisar las políticas y            directrices educacionales
                    de la Iglesia Metodista de Chile para sus instituciones y pastorales
                    educativas.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-6">
                <i class="fa fa-university bg-color-6" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-6">Educación Pedagógica</h3>
                <p>Monitorear y evaluar la tarea educativa en lo pedagógico y confesante
                    de cada una de las instituciones y pastorales afiliadas.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-7">
                <i class="fa fa-sticky-note bg-color-7" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-1">Coordinación</h3>
                <p>Coordinar las tareas de las Fundaciones locales, distritales o nacionales
                    que cree la Iglesia Metodista de Chile en el área de la educación.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-5">
                <i class="fa fa-plus-square bg-color-5" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-5">Desarrollo estratégico</h3>
                <p>Promover un plan de desarrollo estratégico de la Educación Metodista
                    en el país.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-3">
                <i class="fa fa-shield bg-color-3" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-3">Descentralización </h3>
                <p>Descentralizar la acción educativa nacional fortaleciendo el trabajo en
                    los distritos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROMOTION SECTION-->
    <section class="promotionWrapper" style="background-image: url(img/home/promotion-1.jpg);">
      <div class="container">
        <div class="promotionInfo">
          <h2>Necesitas más información?</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod </p>
          <a href="contacto.html" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i>Contacto</a>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix coursesSection" id="ourCourses">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Eventos</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="course-single-left-sidebar.html"><img src="img/home/courses/course-1.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="course-single-left-sidebar.html" class="color-1">Seminarios</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="course-single-left-sidebar.html"><img src="img/home/courses/course-2.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-2">
                <h3><a href="course-single-left-sidebar.html" class="color-2">Aniversarios</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <ul class="list-inline btn-green">
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VER MAS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="course-single-left-sidebar.html"><img src="img/home/courses/course-3.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-6">
                <h3><a href="course-single-left-sidebar.html" class="color-6">Día de la Biblia</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <ul class="list-inline btn-red">
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VER MAS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="course-single-left-sidebar.html"><img src="img/home/courses/course-4.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-4">
                <h3><a href="course-single-left-sidebar.html" class="color-4">Inicio Escolar</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <ul class="list-inline btn-sky">
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VER MAS</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-3 teamSection" id="ourTeam">
      <div class="container">
        <div class="sectionTitle text-center alt">
          <h2>
            <span class="shape shape-left"></span>
            <span>Directiva</span>
            <span class="shape shape-right "></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel teamSlider">
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Smith</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-2.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-2.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix homeGallerySection" id="ourGallery">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Galería</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row"></div>

        <div class="row isotopeContainer" id="container">
          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_1.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_1.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_2.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_2.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_3.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_3.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_4.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_4.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_5.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_5.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_6.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_6.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_7.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_7.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children">
            <article class="">
              <figure>
                <img src="img/home/home_gallery/gallery_sm_8.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/home/home_gallery/gallery_lg_8.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>
        </div>

        <div class="btnArea">
          <a href="photo-gallery.html" class="btn btn-primary">VER MÁS</a>
        </div>

      </div>
    </section>

    <!-- COUNT UP SECTION-->
    <section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall">
          <h2>Datos Estadisticos</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">179</div>
              <div class="counterInfo bg-color-1">Eventos</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">15</div>
              <div class="counterInfo bg-color-2">Colegios</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">122</div>
              <div class="counterInfo bg-color-3">Documentos</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">1500</div>
              <div class="counterInfo bg-color-5">Funcionarios</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Noticias</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-1.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">10 <br>July</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">The standard chunk of Lorem.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-2.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-2">10 <br>July</div>
              <div class="caption border-color-2">
                <h3><a href="single-blog-left-sidebar.html" class="color-2">Vestibulum congue massa vitae.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-green">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-3.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-5">10 <br>July</div>
              <div class="caption border-color-5">
                <h3><a href="single-blog-left-sidebar.html" class="color-5">Curabitur ac nulla sodales risus.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-red">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="btnArea">
          <a href="blog-grid.html" class="btn btn-primary">VER MÁS</a>
        </div>

      </div>
    </section>


<!-- FOOTER -->
<footer class="footer-2">
  <!-- COLOR BAR -->
  <div class="container-fluid color-bar clearfix">
    <div class="row">
      <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
      <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
      <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
      <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
      <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
      <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
      <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
      <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
      <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
      <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
      <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
      <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
    </div>
  </div>
  
  <!-- FOOTER INFO AREA -->
  <div class="footerInfoArea full-width clearfix" style="background-color:#58ab58">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div class="footerTitle">
            <a href="index.html"><img src="img/logov2.png"></a>
          </div>
          <div class="footerInfo">
            <p>“Si clamares a la inteligencia y a la prudencia dieres tu voz… Entonces entenderás el temor del Señor y hallarás el conocimiento de Dios. Porque el Señor da la sabiduría y de su boca viene el conocimiento y la inteligencia.”</p>
            <p>Proverbios 2:3-6.</p>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
          <div class="footerTitle">
            <h4 class="color-1">Enlaces</h4>
          </div>
          <div class="footerInfo">
            <ul class="list-unstyled footerList">
              <li>
                <a href="index.html">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>Noticias
                </a>
              </li>
              <li>
                <a href="about_us.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Eventos
                </a>
              </li>
              <li>
                <a href="index-v2.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Documentos
                </a>
              </li>
              <li>
                <a href="index-v3.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Webmail
                </a>
              </li>
              <li>
                <a href="photo-gallery.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Galería
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="footerTitle">
            <h4 class="color-2">Noticias Recientes</h4>
          </div>
          <div class="footerInfo">
            <ul class="list-unstyled postLink">
              <li>
                <div class="media">
                  <a class="media-left" href="single-blog.html">
                    <img class="media-object img-rounded border-color-1" src="img/footer/footer-img-1.png" alt="Image">
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading"><a href="single-blog.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                    <p>July 7 - 2016</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <a class="media-left" href="single-blog-left-sidebar.html">
                    <img class="media-object img-rounded border-color-2" src="img/footer/footer-img-2.png" alt="Image">
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                    <p>July 7 - 2016</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <a class="media-left" href="single-blog-left-sidebar.html">
                    <img class="media-object img-rounded border-color-4" src="img/footer/footer-img-3.png" alt="Image">
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                    <p>July 7 - 2016</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--
        <div class="col-sm-3 col-xs-12">
          <div class="footerTitle">
            <h4 class="color-3">Mailing List</h4>
          </div>
          <div class="footerInfo">
            <p>Sign up for our mailing list to get latest updates and offers.</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
              <button type="submit" class="input-group-addon" id="basic-addon21"><i class="fa fa-check" aria-hidden="true"></i></button>
            </div>
          </div>
          <div class="footerTitle">
            <h4 class="color-5">Payment Method</h4>
          </div>
          <ul class="list-inline">
            <li><img src="img/footer/card1.png"></li>
            <li><img src="img/footer/card2.png"></li>
            <li><img src="img/footer/card3.png"></li>
            <li><img src="img/footer/card4.png"></li>
          </ul>
        </div>
        -->
      </div>
    </div>
  </div>
  <!-- COPY RIGHT -->
  <div class="copyRight clearfix">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-push-7 col-xs-12">
            <ul class="list-inline">
             <li><a href="#" style="background-color: #3b5998"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" style="background-color: #00aced"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-xs-12">
          <div class="copyRightText">
            <p>© 2018 Copyright Ministerio de Educación Metodista - <a href="https://www.mem.cl/">MEM</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<div class="scrolling">
<a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="plugins/counter-up/jquery.counterup.min.js"></script>
<script src="plugins/isotope/isotope.min.js"></script>
<script src="plugins/isotope/jquery.fancybox.pack.js"></script>
<script src="plugins/isotope/isotope-triger.js"></script>
<script src="plugins/countdown/jquery.syotimer.js"></script>
<script src="plugins/velocity/velocity.min.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

