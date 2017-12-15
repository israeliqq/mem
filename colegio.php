
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
            <li><a href="index.html">Inicio</a></li>
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
              <img src="img/course-single/course-single-title.jpg" alt="image" class="img-responsive">
              <div class="caption border-color-1">
                <h3 class="color-1">Visión</h3>
                <p><?php echo utf8_encode($dato['vision']); ?></p>
                <hr>
                <h3 class="color-1">Misión</h3>
                <p><?php echo utf8_encode($dato['mision']); ?></p>
                <hr>
                <h3 class="color-1"><i class="fa fa-calendar" aria-hidden="true"></i> Telefono: <span style="color: #666666;">+56 <?php echo utf8_encode($dato['telefono']); ?></span></h3>
                <hr>
                <h3 class="color-1"><i class="fa fa-calendar" aria-hidden="true"></i> Email: <span style="color: #666666;"><?php echo utf8_encode($dato['email']); ?></span></h3>
                <hr>
                <h3 class="color-1"><i class="fa fa-calendar" aria-hidden="true"></i> Dirección: <span style="color: #666666;"><?php echo utf8_encode($dato['direccion']); ?></span></h3>




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
                          <p><?php echo utf8_encode($dato['nombre']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Ciudad</h4>
                          <p><?php echo utf8_encode($dato['ciudad']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Distrito</h4>
                          <p><?php echo utf8_encode($dato['distrito']); ?></p>
                        </div>
                      </li>                                            
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">RBD</h4>
                          <p><?php echo utf8_encode($dato['rbd']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Matricula</h4>
                          <p><?php echo utf8_encode($dato['matricula']); ?> ALUMNOS</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Funcionarios</h4>
                          <p><?php echo utf8_encode($dato['funcionarios']); ?> FUNCIONARIOS</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Director</h4>
                          <p><?php echo utf8_encode($dato['director']); ?></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Capellan</h4>
                          <p><?php echo utf8_encode($dato['capellan']); ?></p>
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
<?php include("piepagina.php");  ?>
<!-- FOOTER -->

