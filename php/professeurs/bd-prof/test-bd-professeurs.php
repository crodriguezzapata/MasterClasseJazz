<!--conexion a la bd-->
<?php
include ('php/bdd/bdd-conexion.php');
?>

<!--Creacion de otro Grill para los profs-->
<div class="row" id="photos-prof">

<!--requete-->
<?php
$reponse = $bdd -> query('SELECT * FROM professeurs LIMIT 0, 3');
?>

<!--afficher les resultats-->
<?php
while($donnees=$reponse->fetch())
{
    echo '<div class="col-sm-4">';
    echo '<h2>' . $donnees['Nom'].'</h2>';
    echo '<h3>'.$donnees['Prenom'].'</h3>';
    echo '<img src="'.$donnees['photo'].'" alt=""></br>';
    echo '<h4><b>'.$donnees['Instrument'].'</b></h4>';
    echo '<p>'.$donnees['Description'].'</p>';
    echo '</div>';
}
$reponse->closeCursor(); //termine le traitement de la requete
?>

</div>

<div class="row" id="photos-prof">
<!--requete-->
<?php
$reponse = $bdd -> query('SELECT * FROM professeurs LIMIT 3, 3');
?>

<!--afficher les resultats-->
<?php
while($donnees=$reponse->fetch())
{
    echo '<div class="col-sm-4">';
    echo '<h2>' . $donnees['Nom'].'</h2>';
    echo '<h3>'.$donnees['Prenom'].'</h3>';
    echo '<img src="'.$donnees['photo'].'" alt=""></br>';
    echo '<h4><b>'.$donnees['Instrument'].'</b></h4>';
    echo '<p>'.$donnees['Description'].'</p>';
    echo '</div>';
}
$reponse->closeCursor(); //termine le traitement de la requete
?>
</div>