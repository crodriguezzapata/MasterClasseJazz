<?php
/*
*   Barra de navegacion incluida en todas las paginas
*/
?>

     <header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<?php
                          for($i=1;$i<=3;$i++){
						      echo    '<span class="icon-bar"></span>';
                          }
                        ?>
					</button>
					<a href="index.php" class="navbar-brand">MCJ<span class="glyphicon glyphicon-music"></span></a>
				</div>

				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="mcj.php">Sur nous</a></li>
						<li><a href="professeurs.php">Profs</a></li>
						<li><a href="programme.php">Programme de la semmaine</a></li>

						<!--SUBMENU DE LOS MEDIOS-->
						<li class="dropdown">
                          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="photos.php">Photos</a>
                            </li>

                            <li class="dropdown">
                                <a href="videos.php">Videos</a>
                            </li>
                          </ul>
                        </li>

						<!--TERMINA SUBMENU DE LOS MEDIOS-->
					</ul>

					<!--LOGIN-->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="jam.php">Jams</a></li>
                      <li><a href="inscription.php">Connection/Inscription <span class="glyphicon glyphicon-log-in"></span></a></li>
                    </ul>

				</div>
			</div>
		</nav>
	</header>
