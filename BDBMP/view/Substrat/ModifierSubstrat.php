<head>
    <meta charset="UTF-8">
    <title>Modifier substrat</title>
</head>

<div class="container">
<form action="../controller/Routeur.php?table=ControllerSubstrat&action=updated&id=<?php echo $s[0][0]?>"  method="POST" enctype='multipart/form-data'>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" name="nom" value="<?php echo $s[0][1]?>" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputMS">Masse Sèche</label>
            <input type="number" step="any" class="form-control" id="inputMS" name="ms" value="<?php echo $s[0][2]?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputMV">Masse Volatile</label>
            <input type="number" step="any" class="form-control" id="inputMV" name="mv" value="<?php echo $s[0][3]?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputMSMV">Ratio MS/MV</label>
            <input type="number" step="any" class="form-control" id="inputMSMV" name="ratio" value="<?php echo $s[0][4]?>" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3 ">
            <label for="inputPhosophore">Phosphore*</label>
            <input type="number" step="any" class="form-control" id="inputPhosophore" name="phosphore" value="<?php echo $s[0][5]?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputPotassium">Potassium</label>
            <input type="number" step="any" class="form-control" id="inputPotassium" name="potassium" value="<?php echo $s[0][7]?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputAzoteA">Azote Ammoniacal</label>
            <input type="number" step="any" class="form-control" id="inputAzoteA" name="azoteA" value="<?php echo $s[0][11]?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputAzoteK">Azote Kjeldahl</label>
            <input type="number" step="any" class="form-control" id="inputAzoteK" name="azoteK" value="<?php echo $s[0][9]?>" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputBMPMV">BMP Masse Volatile</label>
            <input type="number" step="any" class="form-control" id="inputMS" name="bmpmv" value="<?php echo $s[0][13]?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputBMPMF">BMP Masse Fraiche</label>
            <input type="number" step="any" class="form-control" id="inputBMPMF" name="bmpmf" value="<?php echo $s[0][14] ?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPourcentage">Pourcentage de méthane</label>
            <input type="number" step="any" class="form-control" id="inputPourcentage" name="pourcentage" value="<?php echo $s[0][15] ?>" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCategorie">Catégorie</label>
            <select class="form-control form-control-sm" id="inputCategorie" name="categorie"  required>
                <option value="<?php echo $s[0][17] ?>"> <?php echo $s[0][17] ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
            </select>
        </div>
    </div>


    <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
</form>
</div>