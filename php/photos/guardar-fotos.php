<?php
include ("../bdd/bdd-conexion.php");

$annee = $_POST['annee'];
$nom = $_POST['nom'];
$legende = $_POST['legende'];
$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    
    $req = "INSERT INTO imagenes(nom, legende, annee, photo) VALUES('$nom', '$legende', '$annee', '$photo')";
    $resultado = $bdd->query($req);
    if($resultado){
        header ('Location: ../../insertion-photos.php');
    }
    else{
        echo '<br>';
        echo "Error al subir imagen";
    }
?>