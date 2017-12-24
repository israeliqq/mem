<!-- HEADER -->
<?php include("cabezera.php");  ?>

<!-- HEADER -->


    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>Galeria de Imágenes</h2>
          <ol class="breadcrumb">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Galeria de Imágenes</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->


    <section class="mainContent full-width clearfix homeGallerySection">
      <div class="container">
        <div class="row">
        	<h1 class="titulo-galeria-2 color-4">Congresos MEM 2017</h1>
        	<hr>
        </div>
        <div class="row isotopeContainer" id="container">



        <?php for ($i = 1; $i <= 43; $i++) {?>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity">
            <article class="">
              <figure>
                <img src="img/CONGRESO2017/<?php echo $i;?>.JPG" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="img/CONGRESO2017/<?php echo $i;?>.JPG">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

		<?php }?>


        </div>
        <!--
          	<div class="btnArea">
          	<a href="blog-grid.html" class="btn btn-primary">VER MÁS</a>
        	</div>
        -->
      </div>
    </section>





 

<!-- FOOTER -->
<?php include("piepagina.php");  ?>
<!-- FOOTER -->
