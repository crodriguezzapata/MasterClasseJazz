<br><br>

<div class="row">
    <div class="col-md-10 col-md-offset-1 sign-up-page">
        <div class="row">
            <div class="col-md-6 col-md-push-6 sign-in">
                <div class="panel panel-primary col-md-12">
                    <div class="sign-up-form">
                        <h3 class="formulaire-title">S'INSCRIRE</h3>
                        <hr>
                        <br>
                        <form action="php/inscription/registro.php" method="post">
                            <label for="nom" class="control-label col-md-4">Nom:</label>
                            <div class="form-group col-md-8">
                                <input type="name" name="nom" placeholder="Nom" class="form-control" required>
                            </div>
                            <label for="prenom" class="control-label col-md-4">Prénom:</label>
                            <div class="form-group col-md-8">
                                <input type="name" name="prenom" placeholder="Prénom" class="form-control" required>
                            </div>
                            <label for="email" class="control-label col-md-4">Adresse E-mail:</label>
                            <div class="form-group col-md-8">
                                <input type="email" name="email" placeholder="E-mail" class="form-control" required>
                            </div>
                            <label for="password" class="control-label col-md-4">Mot de Passe:</label>
                            <div class="form-group col-md-8">
                                <input type="password" name="password" placeholder="*******" class="form-control" required>
                            </div>
                            <label for="rpassword" class="control-label col-md-4">Confirmation du Mot de Passe:</label>
                            <div class="form-group col-md-8">
                                <input type="password" name="rpassword" placeholder="*******" class="form-control" required>
                            </div>
                            <label for="telefono" class="control-label col-md-4">Téléphone:</label>
                            <div class="form-group col-md-8">
                                <input type="telephone" name="telefono" placeholder="ex: 0611223344" class="form-control">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg sing-in-btn" name="submit" value="S'inscrire">
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6 sign-up-info">
                <div class="panel panel-primary col-md-12">
                    <div class="text-center">
                        <h2>Avez-vous déjà un compte?</h2>
                        <p>Connectez vous maintenant</p>
                        <a href="login.php" class="btn btn-primary btn-lg sing-in-btn">SE CONNECTER</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>