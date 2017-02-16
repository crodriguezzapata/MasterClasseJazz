<br><br><br><br><br>
<div class="row">
    <div class="panel panel-primary col-md-10 col-md-offset-1">
        <h3 class="formulaire-title">PARTICIPER DANS LE JAM!</h3>
        <hr>
        <br>
        <form action="registo-jam.php" method="POST">
            <label for="morceau" class="control-label col-md-4">Morceau:</label>
            <div class="form-group col-md-8">
                <input type="text" name="pista" placeholder="" class="form-control" >
            </div>
            <!---------------------------------INSTRUMENTOS JAM-------------------------------------->
            <label for="instrumento" class="control-label col-md-4">Instrument:</label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="guitar"> guitar
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="piano"> piano
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="sax"> sax
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="bass"> bass
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="chant"> chant
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="drum"> drum
            </label>
            <!------------------------------------FIN INSTRUMENTOS JAM------------------------------------------->
            <br><br>
            <div class="text-center">
                <input type="submit" name="valider" class="btn btn-primary btn-lg sign-in-btn" value="Valider">
            </div>
            <br>
        </form>
    </div>
</div>
<br><br><br><br>