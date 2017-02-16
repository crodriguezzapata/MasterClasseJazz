<?php
//conexion bdd
require 'php/bdd/bdd-conexion3.php';

//inicio de sesion
session_start();
//Si la sesion es iniciada
if(isset($_SESSION["id"])){
    header("location: bienvenu.php");
}

//evaluamos variable post
if(!empty($_POST)){
    //Proteccion de la bdd para los datos ingresados, quita ; '' o caracteres que perjudican el codigo
    $email = mysqli_real_escape_string($conexion,$_POST['email']);
    $password = mysqli_real_escape_string($conexion,$_POST['password']);
    
    $error = '';
    
    //Proteccion de password por encriptado
    $sha1_pass = sha1($password);
    
    //Consulta a la base de datos, verificacion de usuario existente y recuperacion de nom et prenom
    $req = "SELECT id, nom, prenom FROM users WHERE email = '$email' AND password = '$sha1_pass'";
    
    //Conteo de filas mostradas
    $rep = $conexion->query($req);
    $rows = $rep->num_rows;
    
    //Si hay resultados en rows se ejecuta la condicion
    if($rows>0){
        $rows=$rep->fetch_assoc();
        $_SESSION['nom']=$rows['nom'];
        $_SESSION['prenom']=$rows['prenom'];
        $_SESSION['id']=$rows['id'];
        
        header("location: bienvenu.php");
    }
    else{
        $error = "Email ou Password incorrect";
    }
}
?>



<br><br><br><br><br>
<div class="row">
    <div class="panel panel-primary col-md-10 col-md-offset-1">
        <h3 class="formulaire-title">SE CONNECTER</h3>
        <hr>
        <br>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="email-login" class="control-label col-md-4">Adresse E-mail:</label>
            <div class="form-group col-md-8">
                <input type="email" name="email" placeholder="E-mail" class="form-control" >
            </div>
            <label for="password-login" class="control-label col-md-4">Mot de Passe:</label>
            <div class="form-group col-md-8">
                <input type="password" name="password" placeholder="*******" class="form-control" >
            </div>
            <div class="text-center">
                <input type="submit" name="login" class="btn btn-primary btn-lg sign-in-btn" value="Se Connecter">
            </div>
            <br>
            <div class ="text-center" style="font-size:16px;color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : "";?></div>
            <br><br>
        </form>
    </div>
</div>
<br><br><br><br><br>