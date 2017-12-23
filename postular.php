<!-- HEADER -->
<?php include("cabezera.php");  

$array = postular();


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



<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="cartInfo">
              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr class="bg-color-1">
                      <th scope="col">NOMBRE</th>
                      <th scope="col">CIUDAD</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">TELÉFONO</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($dato = $array->fetch_assoc()){?>
                <tr>

                    <td><?php echo utf8_encode($dato['nombre']); ?></td>
                    <td><?php echo utf8_encode($dato['ciudad']); ?></td>
                    <td><?php echo utf8_encode($dato['email']); ?></td>
                    <td>+56<?php echo utf8_encode($dato['telefono']); ?></td>

                </tr>
                <?php }?>
                </tbody>
             </table>
           </div>
         </div>
    </div>
  </div>
</div>
    </section>



<script src="plugins/google-custom-map/google-map.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAjUY8rnvqvQmnUvnztrDgnIpQTLxidt18&callback=initMap"></script>


<!-- FOOTER -->
<?php include("piepagina.php");  ?>
<!-- FOOTER -->
