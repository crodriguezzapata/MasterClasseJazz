<?php
session_start();
require 'php/bdd/bdd-conexion3.php';

if(!isset($_SESSION['id'])){
    header("location: login.php");
}

$id = $_SESSION['id'];

$req = "SELECT id, nom, prenom FROM users WHERE id = '$id'";
$rep=$conexion->query($req);

$row = $rep->fetch_assoc();
?>

<?php
require_once 'php/site/head.php';
require_once 'php/site/nav.php';
require_once 'php/site/jumbotron.php';
?>
<br><br>
<div class="row">
    <div class="panel panel-primary panel-error col-md-10 col-md-offset-1">
        <div class="text-center">
            <h1><?php echo 'Bienvenu! '.utf8_decode($row['prenom'])." ".utf8_decode($row['nom']);?></h1>
        </div>
        <br><br>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
require_once 'php/site/footer.php';
?>