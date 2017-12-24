
<!-- HEADER -->
<?php include("cabezera.php"); 

$id = $_GET["id"];

$array = Colegio($id);
$dato = $array->fetch_assoc();

?>
<!-- HEADER -->



    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2><?php echo utf8_encode($dato['nombre']); ?></h2>
          <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li>Colegio</li>
            <li><?php echo utf8_encode($dato['distrito']); ?></li>
            <li class="active"><?php echo utf8_encode(str_replace("<br>","",$dato['nombre'])); ?></li>
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
              
              <div class="caption border-color-1">
                <img src="<?php echo utf8_encode($dato['imagen']);?>" alt="colegio" class="img-responsive">
                <h3 id="titulo-colegio">Visión</h3>
                <p id="parrafo-colegio"><?php echo utf8_encode($dato['vision']); ?></p>
                <hr>
                <h3 id="titulo-colegio" >Misión</h3>
                <p id="parrafo-colegio"><?php echo utf8_encode($dato['mision']); ?></p>
                <hr>
                <p id="parrafo-colegio" class="color-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Telefono: <span id="parrafo-colegio" style="font-weight: bold;">+56 <?php echo utf8_encode($dato['telefono']); ?></span></p>
                <hr>
                <p id="parrafo-colegio" class="color-1"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <span id="parrafo-colegio"  style="font-weight: bold;"><?php echo utf8_encode($dato['email']); ?></span></p>
                <hr>
                <p id="parrafo-colegio" class="color-1"><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: <span id="parrafo-colegio"  style="font-weight: bold;"><?php echo utf8_encode($dato['direccion']); ?></span></p>
                <hr>
                <p id="parrafo-colegio" class="color-1"><i class="fa fa-internet-explorer" aria-hidden="true"></i> Sitio Web: <span id="parrafo-colegio"  style="font-weight: bold;"><a target="_blank"  href="http://<?php echo utf8_encode($dato['web']); ?>"><?php echo utf8_encode($dato['web']); ?></a></span></p>
                <hr>    
              </div>          
            </div>
          </div>

          <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-1 ">
                    <h3 class="panel-title">Información</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-university" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Nombre</h4>
                          <p><?php echo utf8_encode($dato['nombre']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Ciudad</h4>
                          <p><?php echo utf8_encode($dato['ciudad']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Distrito</h4>
                          <p><?php echo utf8_encode($dato['distrito']); ?></p>
                        </div>
                      </li>                                            
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">RBD</h4>
                          <p><?php echo utf8_encode($dato['rbd']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Matricula</h4>
                          <p><?php echo utf8_encode($dato['matricula']); ?> ALUMNOS</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Funcionarios</h4>
                          <p><?php echo utf8_encode($dato['funcionarios']); ?> FUNCIONARIOS</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Director</h4>
                          <p><?php echo utf8_encode($dato['director']); ?></p>
                        </div>
                      </li>
                      <!-- <li class="media">
                        <div class="media-left iconContent bg-color-1">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                       <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Capellan</h4>
                          <p><?php echo utf8_encode($dato['capellan']); ?></p>
                        </div>
                      </li>  -->                                                               
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
<?php include("piepagina.php");  ?>
<!-- FOOTER -->

