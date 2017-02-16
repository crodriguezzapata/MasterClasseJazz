<div id="slider" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <?php
            for($i=1;$i<=4;$i++){
                echo    '<li data-target="#slider" data-slide-to="'.$i.'"></li>';
            }
        ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="imgslider" src="images/imagesslider/imagen1.jpg" alt="Master Classe Jazz">
          <div class="carousel-caption">
            <h3>Master Classe Jazz</h3>
            <p>Agregar una cosa para describir esto</p>
          </div>
        </div>

        <?php
          for($i=2;$i<=5;$i++){
            echo    '<div class="item">
                        <img src="images/imagesslider/imagen'.$i.'.jpeg" class="imgslider">
                        <div class="carousel-caption">
                            <h3>Titulo</h3>
                            <p>Agregar una cosa para describir esto</p>
                        </div>
                    </div>';
          }
        ?>

      <!-- Controls -->
      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
