<?php

?>

<div class="page-header col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
  <h1>Sur notre programme</h1>
</div>

<div class="row">
  <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-3 col-xs-12">
    <div class="thumbnail">
      <a href="inscription.php"><img src="images/imagesmain/main1.png" alt="Primera nota"></a>
      <div class="caption">
        <h3>Abonne-vous!</h3>
        <p class="text">Dévinez-vous dans un excellent musicien de jazz avec nous!</p>
      </div>
    </div>
  </div>

  <div class="col-sm-10 col-md-4 col-xs-12">
    <div class="thumbnail" style="min-height:356px">
      <a href="photos.php"><img src="images/imagesmain/main2.png" alt="Primera nota"></a>
      <div class="caption">
        <h3>Regardez nous photos et vidéos</h3>
        <p class="text">Découvrez notre magnifique participacion dans le festival Jazz en Bouche <br>
        <?php
            for($i=1;$i<=5;$i++){
                echo '<span class="glyphicon glyphicon-music" aria-hidden="true"></span>';
            }
            ?></p>
      </div>
    </div>
  </div>

  <div class="col-sm-10 col-md-3 col-xs-12">
    <div class="thumbnail">
      <a href="professeurs.php"><img src="images/imagesmain/main3.jpg" alt="Primera nota"></a>
      <div class="caption">
        <h3>Nous enseignants</h3>
        <p class="text">Nous avons aux meilleures prof du monde, regardez son expérience</p>
      </div>
    </div>
  </div>

</div>
