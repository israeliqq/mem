
<?php include("conexion.php"); ?>

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
    <div class="container-fluid color-bar top-fixed clearfix">
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
      <!-- TOP INFO BAR -->
      <div class="top-info-bar  hidden-xs" id="color-top-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope " id="color-icons-topbar" aria-hidden="true"></i> <a href="mailto:contacto@mem.cl">contacto@mem.cl</a></li>
                <li><i class="fa fa-phone " id="color-icons-topbar"  aria-hidden="true"></i> 57-2-398000</li>
                <li><i class="fa fa-clock-o" id="color-icons-topbar" aria-hidden="true"></i> Horario 8:00 a 18:00</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li><i class="fa fa-globe" id="color-icons-topbar" aria-hidden="true"></i></li>
                <li class="LanguageList">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option>Español </option>
                    <option value="2">Inglés</option>

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
            <a class="navbar-brand" href="index.php"><img src="img/logomem.png" alt="MEM-CHILE"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown singleDrop color-3">
                <a href="index.php">
                  <i class="fa fa-home bg-color-4"  aria-hidden="false"></i> <span>Inicio</span>
                </a>
              </li>

              <li class=" dropdown singleDrop  color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i> <span>Colegios</span></a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Norte</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('norte');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="colegio.php?id=<?php echo $dato['id']; ?>"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Norte Verde</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('norte verde');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="colegio.php?id=<?php echo $dato['id']; ?>"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Metropolitano</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('metropolitano');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="colegio.php?id=<?php echo $dato['id']; ?>"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Concepción</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('concepcion');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="colegio.php?id=<?php echo $dato['id']; ?>"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Distrito Sur</a>
                    <ul class="dropdown-menu">
                      <?php  $array = Consulta('sur');  while ($dato = $array->fetch_assoc()){  ?>
                      <li class=""><a href="colegio.php?id=<?php echo $dato['id']; ?>"><?php echo utf8_encode($dato['nombre']); ?></a></li>
                      <?php }  ?> 
                    </ul>
                  </li> 
                </ul>
              </li>

              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-users bg-color-4" aria-hidden="true"></i> <span>Nosotros</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">Misión y Visión</a></li>
                  <li><a href="directivos.php">Equipo Directivo</a></li>
                  <li><a href="#">Proyecto Educativo</a></li>
                  <li><a href="#objetivos">Nuestros Objetivos</a></li>
                </ul>
                
              </li>

              <li class="dropdown singleDrop color-3 ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-file-text bg-color-4" aria-hidden="true"></i>
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
                  <li><a target="_blank" href="documentos/reglamentointerno.pdf">Reglamento Interno</a></li>
                </ul>
              
              </li>
              <!--<li class="dropdown singleDrop color-3  ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-4" aria-hidden="true"></i>
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
              
            <li class="dropdown singleDrop color-3">
                <a href="galeria.php">
                  <i class="fa fa-picture-o bg-color-4"  aria-hidden="false"></i> <span>Galeria</span>
                </a>
              </li>
              <li class="dropdown singleDrop color-3">
                <a href="contacto.php">
                  <i class="fa fa-envelope bg-color-4"  aria-hidden="false"></i> <span>Contacto</span>
                </a>
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

