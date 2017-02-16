<!--Pone el contenido en la caja-->
<div class="container">
   
   <!--Header de la pagina-->
   <div class="blog-header">
       <h1 class="blog-title">Les Professeurs</h1>
   </div>
   
   <!--Inicio del grill-->
   <div class="row">
   
   <div class="col-sm-9 blog-main"> 
                  
           <!--Inicio de las imagenes/links-->
           <?php
            require_once 'php/professeurs/bd-prof/test-bd-professeurs.php';
           ?>
       
   </div>
   <!--Cierre columna de blog-->
   
   <!--Columnas del Sidebar-->
   <?php
        require_once 'php/site/sidebar-sitio.php';
    ?>
    
    </div>
    <!--Termino del Grill-->
</div>

<br>