<?php include("cabezera.php");  
$id = $_GET["id"];
$array = noticias($id);
$dato = $array->fetch_assoc();
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

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent">
              <img src="img/logomem.png" alt="image" class="img-responsive">
              <div class="sticker-round bg-color-4">20 <br>Diciembre</div>
              <div class="caption border-color-1 singleBlog">
                <h3 class="color-1"><?php echo utf8_encode($dato['titulo']); ?></h3>
                <p id="parrafo-noticias"><?php echo utf8_encode($dato['html']); ?> </p>
                <p><small><b><?php echo utf8_encode($dato['autor']); ?> </b></small></p>  
              </div>
            </div>
          </div>
          <!--<div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-1 border-color-1">
                  <h3 class="panel-title">Search</h3>
                </div>
                <div class="panel-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Your Search" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2"><input class="btn btn-primary bg-color-1" type="submit" value="Search"></span>
                  </div>
                </div>
              </div>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-2 border-color-2">
                  <h3 class="panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled categoryItem">
                    <li><a href="category.html">Education</a></li>
                    <li><a href="category.html">Kindergarten</a></li>
                    <li><a href="category.html">Playground</a></li>
                    <li><a href="category.html">Post Formats</a></li>
                    <li><a href="category.html">Children</a></li>
                  </ul>
                </div>
              </div>
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-5 border-color-5">
                    <h3 class="panel-title">Related Course</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list blogListing">
                      <li class="media">
                        <div class="media-left">
                          <a href="course-single-left-sidebar.html"><img src="img/course-single/related-course-01.jpg" alt="image"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-single-left-sidebar.html">Mauris semper mass feugiat facilisis.</a></h4>
                          <p>July 7, 2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="course-single-left-sidebar.html"><img src="img/course-single/related-course-02.jpg" alt="image"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-single-left-sidebar.html">Mauris semper mass feugiat facilisis.</a></h4>
                          <p>July 7, 2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="course-single-left-sidebar.html"><img src="img/course-single/related-course-03.jpg" alt="image"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-single-left-sidebar.html">Mauris semper mass feugiat facilisis.</a></h4>
                          <p>July 7, 2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="course-single-left-sidebar.html"><img src="img/course-single/related-course-04.jpg" alt="image"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-single-left-sidebar.html">Mauris semper mass feugiat facilisis.</a></h4>
                          <p>July 7, 2016</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>-->
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

