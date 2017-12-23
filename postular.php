<!-- HEADER -->
<?php include("cabezera.php");  

$array = postular();
$dato = $array->fetch_assoc();

?>
<!-- HEADER -->


    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>Contáctenos</h2>
          <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Contacto</li>
          </ol>
        </div>
      </div>
    </section>



    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix conactSection">
    <?php for ($var = 1 ; $var <= sizeof ($dato) ; $var++) {?>
      <div class="container">
       <div class="row">
            
           <div class="col-md-12 col-sm-12 col-xs-12">
               
           <table class="table" >
               
               <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Número de Contacto</th>
                </tr>
               </thead>
            <tbody>
                    
                    <td><?php echo utf8_encode($dato['nombre']); ?></td>
                    <td><?php echo utf8_encode($dato['ciudad']); ?></td>
                    <td><?php echo utf8_encode($dato['email']); ?></td>
                    <td>+56<?php echo utf8_encode($dato['telefono']); ?></td>
                
            </tbody>
           </table>
           </div>
          <!--<div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-4" href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Dirección:</h3>
                <p>Calle Obispo Labbé #1545</p>
                <p>Iquique, Región de Tarapacá - Chile</p>
              </div>
            </div>
          </div>-->
        <!-- <div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-4" href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Teléfono:</h3>
                <p>+56 9 1234 5678</p>
                <p>+56 2 222 222</p>
              </div>
            </div>
          </div>-->
          <!--<div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-4" href="#">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Correo:</h3>
                <p><a href="mailto:contacto@mem.cl">contacto@mem.cl</a></p>
                <p><a href="mailto:director@mem.cl">director@mem.cl</a></p>
              </div>
            </div>
          </div>-->
           <?php }?>
        </div>
       
        <!--<div class="row">
          <div class="col-xs-12">
            <div class="homeContactContent">
              <form id="form1" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control border-color-1" id="exampleInputEmail1" placeholder="Nombre" name="nombre" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-2" id="exampleInputEmail2" name="correo" placeholder="Correo Electrónico" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-5" id="exampleInputEmail3" name="telefono" placeholder="Teléfono" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-6" id="exampleInputEmail4" name="asunto" placeholder="Asunto" required>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-comments" aria-hidden="true"></i>
                      <textarea class="form-control border-color-4" placeholder="Escribir Mensaje" name="mensaje"></textarea>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="formBtnArea">
                      <button type="submit" class="btn btn-primary">Enviar </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>-->
      </div>
    </section>



<script src="plugins/google-custom-map/google-map.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAjUY8rnvqvQmnUvnztrDgnIpQTLxidt18&callback=initMap"></script>


<!-- FOOTER -->
<?php include("piepagina.php");  ?>
<!-- FOOTER -->
