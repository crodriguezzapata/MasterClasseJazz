<?php
    include ("php/bdd/bdd-conexion.php");
    $req = "SELECT * FROM imagenes";
    $resultado = $bdd->query($req);
?>
<br>
<div class="container text-center" id="galeria">
<?php
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
?>

        <img id="galeria" src="data:image/jpg;base64,<?php echo base64_encode($row['photo']);?>">
<?php
    }
?>
</div>