<br>
<div class="container">
    <div class="row">
        <div class="panel panel-primary col-md-10 col-md-offset-1">
                 <h3 class="formulaire-title">Insertion de photos</h3>
                 <hr>
                 <br>
                 <form action="php/photos/guardar-fotos.php" enctype="multipart/form-data" method="post">
                     <label for="annee" class="control-label col-md-4">Année:</label>
                     <div class="form-group col-md-8">
                         <input type="numbers" class="form-control" name="annee" required>
                     </div>
                     <label for="nom" class="control-label col-md-4">Nom:</label>
                     <div class="form-group col-md-8">
                         <input type="textn" class="form-control" name="nom">
                     </div>
                     <label for="Legende" class="control-label col-md-4">Déscription:</label>
                     <div class="form-group col-md-8">
                         <input type="text" class="form-control" name="legende">
                     </div>
                     <label for="Photo" class="control-label col-md-4">Photo:</label>
                     <div class="form-group col-md-8">
                         <input type="file" name="photo" required >
                     </div>
                     <br>
                     <div class="text-center">
                         <input type="submit" class="btn btn-primary btn-lg sing-in-btn" name="submit" value="Valider">
                     </div>
                     <br><br>
                 </form>       
        </div>
    </div>
</div>
<br><br><br>