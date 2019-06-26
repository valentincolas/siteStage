<head>
    <meta charset="UTF-8">
    <title>Recherche avancée</title>
</head>
<div class="container">
    <form action="../controller/Routeur.php?table=ControllerSubstrat&action=searched"  method="POST">



        <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" name="nom" " >
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
        <div class="form-group col-md-6">
            <label for="inputMS">Matière Sèche</label>
            <select class="form-control form-control-sm" id="selectMS" name="selectMS">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputMS" name="ms">
        </div>
        <div class="form-group col-md-6">
            <label for="inputMV">Matière Volatile</label>
            <select class="form-control form-control-sm" id="selectMV" name="selectMV">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputMV" name="mv"  >
        </div>
        <div class="form-group col-md-6">
            <label for="inputRatio">Ratio MS/MV</label>
            <select class="form-control form-control-sm" id="selectRatio" name="selectRatio">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputRatio" name="ratio" >
        </div>
        <div class="form-group col-md-6">
            <label for="inputBmpMV">BMP MV</label>
            <select class="form-control form-control-sm" id="selectBmpMV" name="selectBmpMV">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputBmpMV" name="bmpMV"  >
        </div>
        <div class="form-group col-md-6">
            <label for="inputBmpMF">BMP MF</label>
            <select class="form-control form-control-sm" id="selectBmpMF" name="selectBmpMF">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputBmpMF" name="bmpMF"  >
        </div>
        <div class="form-group col-md-6">
            <label for="inputPourcentage">Pourcentage de méthane</label>
            <select class="form-control form-control-sm" id="selectPourcentage" name="selectPourcentage">
                <option>=</option>
                <option><</option>
                <option>></option>
                <option><=</option>
                <option>>=</option>
            </select>
            <input type="number" step="any" class="form-control" id="inputPourcentage" name="pourcentage"  >
        </div>


        <button type="submit" class="btn btn-primary" name="submit" value="Search">Rechercher</button>
        <button type="submit" class="btn btn-success" name="submit" value="Excel">Excel</button>

    </form>

</div>