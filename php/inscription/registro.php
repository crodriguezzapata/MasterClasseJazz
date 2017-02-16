<?php
include '../bdd/bdd-conexion.php';
//Recepcion de datos y almacenamiento en variables
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = sha1($_POST["password"]);
$rpassword = sha1($_POST["rpassword"]);
$telefono = $_POST["telefono"];
//Verificacion de igualdad de las passwords
if($password === $rpassword){
    //Consulta donde definimos que escribir donde
    $req = $bdd->prepare ("INSERT INTO users (nom, prenom, email, password, telefono) VALUES (:nom, :prenom, :email, :password, :telefono)");
    
    //Ejecucion de la consulta
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password,
        'telefono' => $telefono
    ));
    if(!$req){
        echo '<script>
        alert("Erreur d´inscription");
        window.history.go(-1);
        </script>';
    }
    else{
        echo '<script>
        alert("Vous êtes inscrit!");
        window.history.go(-1);
        </script>';
    }
}
else{
    echo '<script>
    alert("Le mot passe est different");
    window.history.go(-1);
    </script>';
}
?>