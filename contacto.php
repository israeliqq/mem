



<!-- HEADER -->
<?php include("cabezera.php");  ?>
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
          <div class="col-sm-4 col-xs-12">
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
          </div>
          <div class="col-sm-4 col-xs-12">
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
          </div>
          <div class="col-sm-4 col-xs-12">
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
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="mapArea areaPadding">
              <div id="map"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="homeContactContent">
              <form action="#" method="POST" role="form">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control border-color-1" id="exampleInputEmail1" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-2" id="exampleInputEmail2" placeholder="Correo Electrónico">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-5" id="exampleInputEmail3" placeholder="Teléfono">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-6" id="exampleInputEmail4" placeholder="Asunto">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-comments" aria-hidden="true"></i>
                      <textarea class="form-control border-color-4" placeholder="Escribir Mensaje"></textarea>
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
        </div>
      </div>
    </section>



<script src="plugins/google-custom-map/google-map.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAjUY8rnvqvQmnUvnztrDgnIpQTLxidt18&callback=initMap"></script>


<!-- FOOTER -->
<?php include("piepagina.php");  ?>
<!-- FOOTER -->

