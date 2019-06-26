<head>
    <meta charset="UTF-8">
    <title>Création substrat</title>
</head>
<div class="container">
<form action="../controller/Routeur.php?table=ControllerSubstrat&action=created" method="POST" enctype='multipart/form-data'>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Boues de station" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputMS">Masse Sèche (MS)</label>
            <input type="number" step="any" class="form-control" id="inputMS" name="ms" placeholder="44.20" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputMV">Masse Volatile (MV)</label>
            <input type="number" step="any" class="form-control" id="inputMV" name="mv" placeholder="27.50" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputMSMV">Ratio MS/MV</label>
            <input type="number" step="any" class="form-control" id="inputMSMV" name="ratio" placeholder="62.22" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3 ">
            <label for="inputPhosophore">Phosphore</label>
            <input type="number" step="any" class="form-control" id="inputPhosophore" name="phosphore" placeholder="3.68" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputUnitéPhosphore">Unité Phosphore</label>
            <select   class="form-control form-control-sm" id="inputUnitéPhosphore" name="unitéPhosphore" required>
                <option></option>
                <?php
                foreach ($unitePhosphore as $unité){
                    echo '<option value = ' . $unité['unitePhosphore'] .'>' . $unité['unitePhosphore'] .'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputPotassium">Potassium</label>
            <input type="number" step="any" class="form-control" id="inputPotassium" name="potassium" placeholder="7.4" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputUnitéPotassium">Unité Potassium</label>
            <select   class="form-control form-control-sm" id="inputUnitéPotassium" name="unitéPotassium" required>
                <option></option>
                <?php
                foreach ($unitePotassium as $unité){
                    echo '<option value = ' . $unité['unitePotassium'] .'>' . $unité['unitePotassium'] .'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputAzoteA">Azote Ammoniacal</label>
            <input type="number" step="any" class="form-control" id="inputAzoteA" name="azoteA" placeholder="14.4" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputUnitéAzoteA">Unité Azote Ammoniacal</label>
            <select   class="form-control form-control-sm" id="inputUnitéAzoteA" name="unitéAzoteA" required>
                <option></option>
                <?php
                foreach ($uniteAzoteA as $unité){
                    echo '<option value = ' . $unité['uniteAzoteA'] .'>' . $unité['uniteAzoteA'] .'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputAzoteK">Azote Kjeldahl</label>
            <input type="number" step="any" class="form-control" id="inputAzoteK" name="azoteK" placeholder="1.53" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputUnitéAzoteK">Unité Azote Kjeldahl</label>
            <select   class="form-control form-control-sm" id="inputUnitéAzoteK" name="unitéAzoteK" required>
                <option></option>
                <?php
                foreach ($uniteAzoteK as $unité){
                    echo '<option value = ' . $unité['uniteAzoteK'] .'>' . $unité['uniteAzoteK'] .'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputBMPMV">BMP Masse Volatile</label>
            <input type="number" step="any" class="form-control" id="inputMS" name="bmpmv" placeholder="276.20" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputBMPMF">BMP Masse Fraiche</label>
            <input type="number" step="any" class="form-control" id="inputBMPMF" name="bmpmf" placeholder="217.50" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPourcentage">Pourcentage de méthane (% .vol)</label>
            <input type="number" step="any" class="form-control" id="inputPourcentage" name="pourcentage" placeholder="78.25" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCategorie">Catégorie</label>
            <select class="form-control form-control-sm" id="inputCategorie" name="categorie">

                <option ></option>
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



    <button type="submit" class="btn btn-primary" name="submit">Créer</button>
</form>
</div>