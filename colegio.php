
<?php 
include("conexion.php");  

$id = $_GET["id"];
echo "<h1>".$id."</h1>";

//$array = Colegio($id);

//while ($dato = $array->fetch_assoc()){  echo utf8_encode($dato['nombre']); }            
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
                <li><i class="fa fa-phone " style="background-color:#4c664c " aria-hidden="true"></i> 57-2-398000</li>
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
                  <li><a target="_blank" href="documentos/reglamentointerno.pdf">Reglamento Interno</a></li>
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




    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>NOMBRE DEL COLEGIO</h2>
          <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li>Colegio</li>
            <li>Distrito</li>
            <li class="active">Nombre Colegio</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix courseSingleSection">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent alt">
              <img src="img/course-single/course-single-title.jpg" alt="image" class="img-responsive">
              <div class="sticker bg-color-1">$50</div>
              <div class="caption border-color-1">
                <h3 class="color-1">Visión</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <h3 class="color-1">Misión</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>


<!--        
                <h3 class="color-1">Course Schedule</h3>


                <div class="table-responsive">
                  <table class="table table-curved">
                    <thead>
                      <tr>
                        <th class="col-sm-2 bg-color-1">Time <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                        <th class="col-sm-2 bg-color-2">Monday</th>
                        <th class="col-sm-2 bg-color-3">Tuesday</th>
                        <th class="col-sm-2 bg-color-4">Wednesday</th>
                        <th class="col-sm-2 bg-color-5">Thursday</th>
                        <th class="col-sm-2 bg-color-6">Friday</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>9.00 - 10.00 AM</td>
                        <td>
                          <span class="color-2">History</span>
                          School History
                        </td>
                        <td>
                          <span class="color-3">Math</span>
                          Larning Numbers
                        </td>
                        <td>
                          <span class="color-4">Geography</span>
                          Making a Map
                        </td>
                        <td>
                          <span class="color-5">English</span>
                          Speaking English
                        </td>
                        <td>
                          <span class="color-6">Art</span>
                          Art
                        </td>
                      </tr>
                      <tr>
                        <td>10.00 - 11.00 AM</td>
                        <td>
                          <span class="color-2">Geography</span>
                          Making a Map
                        </td>
                        <td>
                          <span class="color-3">English</span>
                          Speaking English
                        </td>
                        <td>
                          <span class="color-4">Art</span>
                          Art
                        </td>
                        <td>
                          <span class="color-5">Math</span>
                          Larning Numbers
                        </td>
                        <td>
                          <span class="color-6">History</span>
                          School History
                        </td>
                      </tr>
                      <tr>
                        <td>11.00 - 11.30 AM</td>
                        <td>
                          <span class="color-2">Break</span>
                          Lunch
                        </td>
                        <td>
                          <span class="color-3">Break</span>
                          Lunch
                        </td>
                        <td>
                          <span class="color-4">Break</span>
                          Lunch
                        </td>
                        <td>
                          <span class="color-5">Break</span>
                          Lunch
                        </td>
                        <td>
                          <span class="color-6">Break</span>
                          Lunch
                        </td>
                      </tr>
                      <tr>
                        <td>11.30 - 12.30 PM</td>
                        <td>
                          <span class="color-2">English</span>
                          Speaking English
                        </td>
                        <td>
                          <span class="color-3">Art</span>
                          Art
                        </td>
                        <td>
                          <span class="color-4">History</span>
                          School History
                        </td>
                        <td>
                          <span class="color-5">Geography</span>
                          Making a Map
                        </td>
                        <td>
                          <span class="color-6">Math</span>
                          Larning Numbers
                        </td>
                      </tr>
                      <tr>
                        <td>12.30 - 1.30 PM</td>
                        <td>
                          <span class="color-2">Geography</span>
                          Making a Map
                        </td>
                        <td>
                          <span class="color-3">English</span>
                          Speaking English
                        </td>
                        <td>
                          <span class="color-4">Art</span>
                          Art
                        </td>
                        <td>
                          <span class="color-5">Math</span>
                          Larning Numbers
                        </td>
                        <td>
                          <span class="color-6">History</span>
                          School History
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

-->
              </div>          
            </div>
          </div>

          <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-1 border-color-1">
                    <h3 class="panel-title">Información</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Nombre</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">RBD</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Matricula</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Funcionarios</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Director</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Capellan</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>                                                                 
                    </ul>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading bg-color-1 border-color-1">
                    <h3 class="panel-title">Datos de Contacto</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Distrito</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Ciudad</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Dirección</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Teléfono</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Email</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Capellan</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>                                                                 
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

<!-- FOOTER -->
<footer>
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
  <div class="footerInfoArea full-width clearfix" style="background-image: url(img/footer/footer-bg-1.png);">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <div class="footerTitle">
            <a href="index.html"><img src="img/logo-footer.png"></a>
          </div>
          <div class="footerInfo">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit amet.</p>
            <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerTitle">
            <h4>Useful Links</h4>
          </div>
          <div class="footerInfo">
            <ul class="list-unstyled footerList">
              <li>
                <a href="index.html">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz School
                </a>
              </li>
              <li>
                <a href="about_us.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>About Kidz School
                </a>
              </li>
              <li>
                <a href="index-v2.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Store
                </a>
              </li>
              <li>
                <a href="index-v3.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Daycare
                </a>
              </li>
              <li>
                <a href="photo-gallery.html">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  Photo Gallery
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerTitle">
            <h4>Recent Post</h4>
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
        <div class="col-sm-3 col-xs-12">
          <div class="footerTitle">
            <h4>Mailing List</h4>
          </div>
          <div class="footerInfo">
            <p>Sign up for our mailing list to get latest updates and offers.</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
              <button type="submit" class="input-group-addon" id="basic-addon21"><i class="fa fa-check" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- COPY RIGHT -->
  <div class="copyRight clearfix">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-push-7 col-xs-12">
          <ul class="list-inline">
            <li><a href="#" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class="bg-color-2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class="bg-color-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#" class="bg-color-4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#" class="bg-color-5"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-xs-12">
          <div class="copyRightText">
            <p>© 2016 Copyright Kidz School Bootstrap Template by <a href="https://www.iamabdus.com/">Abdus</a>.</p>
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

<!-- LOGIN MODAL -->
<div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading bg-color-1 border-color-1">
        <h3 class="panel-title">Login</h3>
      </div>
      <div class="panel-body">
        <form action="#" method="POST" role="form">
          <div class="form-group formField">
            <input type="text" class="form-control" placeholder="User name">
          </div>
          <div class="form-group formField">
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group formField">
            <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in">
          </div>
          <div class="form-group formField">
            <p class="help-block"><a href="#">Forgot password?</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- CREATE ACCOUNT MODAL -->
<div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading bg-color-1 border-color-1">
        <h3 class="panel-title">Create  an account</h3>
      </div>
      <div class="panel-body">
        <form action="#" method="POST" role="form">
          <div class="form-group formField">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group formField">
            <input type="text" class="form-control" placeholder="User name">
          </div>
          <div class="form-group formField">
            <input type="text" class="form-control" placeholder="Phone">
          </div>
          <div class="form-group formField">
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group formField">
            <input type="password" class="form-control" placeholder="Re-Password">
          </div>
          <div class="form-group formField">
            <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Register">
          </div>
          <div class="form-group formField">
            <p class="help-block">Allready have an account? <a href="#">Log in</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
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
