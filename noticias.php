<?php include("cabezera.php");  

?>


    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>Noticias</h2>
          <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Noticias</li>
          </ol>
        </div>
      </div>
    </section>


    <?php 


    $id = $_GET["id"];
    $array = noticias($id);
    $dato = $array->fetch_assoc(); 

    ?>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent">
              <img src="<?php echo utf8_encode($dato['foto']); ?>" alt="image" class="img-responsive">
              <div class="sticker-round bg-color-4"><?php echo utf8_encode($dato['fecha']); ?></div>
              <div class="caption border-color-1 singleBlog">
                <h3 class="color-1"><?php echo utf8_encode($dato['titulo']); ?></h3>
                <p id="parrafo-noticias"><?php echo utf8_encode($dato['cuerpo']); ?></p>
                <p><?php echo utf8_encode($dato['autor']); ?></p>  
              </div>
            </div>
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
  

<div class="scrolling">
<a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>





<!-- FOOTER -->
<?php include("piepagina.php");  ?>
<!-- FOOTER -->

