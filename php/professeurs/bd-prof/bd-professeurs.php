<!--seleccion de la bd-->
<?php
try
{
    //serveur base de donees login password
    $bdd=new PDO('mysql:host=localhost;dbname=mcj','root','');
}
catch (Exception $e)
{
    die('Erreur: '. $e->getMessage());
}
?>
