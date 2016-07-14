<?php
   $mysqli = new mysqli("localhost","root","","login");

?>
<div class="col-sm-7"> 
  <div class="panel panel-blue">
    <div class="panel-body">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="image/b1.png">
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="image/b2.png">
            <div class="carousel-caption">
            </div>
          </div>
        
          <div class="item">
            <img src="image/b3.png">
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="image/b4.png">
            <div class="carousel-caption">
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="panel-heading">
      <h3>Berita</h3>
    </div>
    <div class="panel-body text-justify">
      <div class="row">
          <?php 

            $query = "SELECT * FROM `berita`;";
            $result = $mysqli->query($query);
                      $i=1;
                      while ($row = $result->fetch_assoc()) {

          ?>
        <div class="col-sm-6">
          <div class="panel-body">
            <h3><?php 
            echo $row['JUDUL_BERITA'];
             ?></h3>
            <?php 
            $format = substr($row['BERITA'], 0, 750);
            echo $format;
             ?>
          </div>
          
        </div>
        <?php 
      }
        ?>
      </div>
    </div>
  </div>
</div>