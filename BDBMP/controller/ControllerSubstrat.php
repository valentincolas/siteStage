<?php

require_once('../lib/File.php');
require_once (File::build_path(array('model', 'Substrat.php'))); // chargement du modèle


class ControllerSubstrat
{

    public static function read()
    {

        $s = Substrat::read('Substrats', 'id = ' . $_GET['id'], '*');
        if ($s != false) {
            $controller = "Substrat";
            $view = 'DetailSubstrat';
            $pagetitle = 'Detail Substrat';
            require(File::build_path(array('view', 'view.php')));
        } else {
            $controller = "Substrat";
            $view = 'ErreurSubstratId';
            $pagetitle = 'ERREUR';
            require(File::build_path(array('view', 'view.php')));
        }

    }

    public static function readAll()
    {
        if (isset($_POST['nom'])) {
            $tab_s = Substrat::read("Substrats", "nom like '%" . $_POST['nom'] . "%'", '*');

        } else {
            $tab_s = Substrat::read("Substrats", "", '*');
        }
        $controller = "Substrat";
        $view = 'ListeSubstrats';
        $pagetitle = 'Liste Substrats';
        require(File::build_path(array('view', 'view.php')));
    }

    public static function create()
    {
        $sql1 = "select DISTINCT(unitePhosphore) from substrats where unitePhosphore <> '-1' ";
        $sql2 = "select DISTINCT(unitePotassium) from substrats where unitePotassium <> '-1' ";
        $sql3 = "select DISTINCT(uniteAzoteA) from substrats where uniteAzoteA <> '-1' ";
        $sql4 = "select DISTINCT(uniteAzoteK) from substrats where uniteAzoteK <> '-1' ";

        $unitePhosphore = Substrat::$pdo->query($sql1);
        $unitePotassium = Substrat::$pdo->query($sql2);
        $uniteAzoteA = Substrat::$pdo->query($sql3);
        $uniteAzoteK = Substrat::$pdo->query($sql4);

        $controller = "Substrat";
        $view = 'CreateSubstrat';
        $pagetitle = 'Creation Substrat';
        require(File::build_path(array('view', 'view.php')));
    }

    public static function created()
    {
        $s = new Substrat($_POST['nom'], $_POST['ms'], $_POST['mv'], $_POST['ratio'], $_POST['phosphore'], $_POST['unitéPhosphore'], $_POST['potassium'],$_POST['unitéPotassium'], $_POST['azoteA'], $_POST['unitéAzoteA'],
            $_POST['azoteK'],$_POST['unitéAzoteK'], $_POST['bmpmv'], $_POST['bmpmf'], $_POST['pourcentage'],
            '0', $_POST['categorie'], null, null);
        $res = $s->save();
        if ($res == true) {
            $id = Substrat::$pdo->lastInsertId();
            header('Location: ../controller/Routeur.php?table=ControllerSubstrat&action=read&id=' . $id);
        } else {
            $controller = "Substrat";
            $view = 'ErreurCreationSubstrat';
            $pagetitle = 'Erreur Creation Substrat';
            require(File::build_path(array('view', 'view.php')));
        }
    }

    public static function update()
    {
        $s = Substrat::read('Substrats', 'id = ' . $_GET['id'], '*');
        $controller = "Substrat";
        $view = 'ModifierSubstrat';
        $pagetitle = 'Modifier Substrat';
        require(File::build_path(array('view', 'view.php')));
    }

    public static function updated()
    {
        $s = new Substrat( $_POST['nom'], $_POST['ms'], $_POST['mv'], $_POST['ratio'], $_POST['phosphore'], $_POST['potassium'], $_POST['azoteA'],
            $_POST['azoteK'], $_POST['bmpmv'], $_POST['bmpmf'], $_POST['pourcentage'], null, $_POST['categorie']);

        $res = $s->update($_GET['id']);
        if ($res == true) {
            header('Location: ../controller/Routeur.php?table=ControllerSubstrat&action=read&id=' . $_GET['id']);
        } else {
            echo 'erreur';
        }
    }

    public static function delete()
    {
        $sql = "delete from substrats where id = '" . $_GET['id'] . "'";
        Substrat::$pdo->query($sql);
        header('Location: ../controller/Routeur.php?table=ControllerSubstrat&action=readAll');
    }

    public static function search()
    {
        $controller = "Substrat";
        $view = 'RechercherSubstrat';
        $pagetitle = 'Rechercher Substrats';
        require(File::build_path(array('view', 'view.php')));
    }

    public static function searched()
    {
        if ($_POST['submit'] == 'Search') {
            self::searchOnWebsite();
        } else if ($_POST['submit'] == 'Excel') {
            self::searchToExcel();
        }
    }

    public static function readStats(){
        $nbTotal = Substrat::read("Substrats", "", "count(*)");
        $sqlCountCateg = "select famille, count(*) from Substrats group by famille + 0";
        $countByCateg = Substrat::$pdo->query($sqlCountCateg);

        $controller = "Substrat";
        $view = 'StatsSubstrats';
        $pagetitle = 'Stats Substrats';
        require(File::build_path(array('view', 'view.php')));
    }

    public static function readAllToExcel(){
        $filename = "substrats";
        $sql = "select id as 'Identifiant', Replace(nom, char(9), ' ') as 'Nom', ms as 'Masse Sèche', mv as 'Masse Volatile', ratiomsmv as 'Ration MS/MV', Replace(phosphore, char(9), ' ') as 'Phosphore',unitePhosphore, Replace(potassium, char(9), ' ') as 'Potassium', unitePotassium, Replace(azoteA, char(9), ' ') as 'Azote Ammonical', uniteAzoteA, Replace(azoteK, char(9), ' ') as 'Azote Kjeldahl', uniteAzoteK, bmpMV, bmpMF, pourcentageMethane from substrats";
        $result = Substrat::$pdo->query($sql);
        self::toExcel($result, $filename);

    }

    private static function toExcel($result, $filename){
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=$filename.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        /*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
        $sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields

        for ($i = 0; $i < $result->columnCount(); $i++) {
            echo mb_convert_encoding($result->getColumnMeta($i)['name'] . "\t",'utf-16','utf-8');
        }
        print("\n");
//end of printing column names
//start while loop to get data
        while($row = $result->fetch())
        {
            $schema_insert = "\t";
            for($j=0; $j< $result->columnCount();$j++)
            {
                if(!isset($row[$j]))
                    $schema_insert .= "NULL".$sep;
                elseif ($row[$j] == -1){
                    $schema_insert .= "".$sep;
                }
                elseif ($row[$j] != "")
                    $schema_insert .= "$row[$j]".$sep;
            }
            $schema_insert = str_replace($sep."$", "", $schema_insert);
            $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
            $schema_insert .= "\t";

            print(trim(mb_convert_encoding($schema_insert,'utf-16','utf-8')));
            print "\n";
        }
    }

    public static function searchToExcel()
    {
        $filtre = array();
        if ($_POST['nom']!='') {
            $filtre['where'][] = "nom like '%" . $_POST['nom'] . "%'";
        }

        if ($_POST['categorie']!='') {
            $filtre['where'][] = "famille = '" . $_POST['categorie'] . "'";
        }

        if ($_POST['ms']!='') {
            $filtre['where'][] = 'ms ' . $_POST['selectMS'] . "'" . $_POST['ms'] . "' and ms != -1";
        }

        if ($_POST['mv']!='') {
            $filtre['where'][] = 'mv ' . $_POST['selectMV'] . "'" . $_POST['mv'] . "' and mv != -1";
        }
        if ($_POST['ratio']!='') {
            $filtre['where'][] = 'ratioMSMV ' . $_POST['selectRatio'] . "'" . $_POST['ratio'] . "' and ratioMSMV != -1";
        }
        if ($_POST['bmpMV']!='') {
            $filtre['where'][] = 'bmpMV ' . $_POST['selectBmpMV'] . "'" . $_POST['bmpMV'] . "' and bmpMV != -1";
        }
        if ($_POST['bmpMF']!='') {
            $filtre['where'][] = 'bmpMF ' . $_POST['selectBmpMF'] . "'" . $_POST['bmpMF'] . "' and bmpMF != -1";
        }
        if ($_POST['pourcentage']!='') {
            $filtre['where'][] = '0 + pourcentageMethane ' . $_POST['selectPourcentage'] . $_POST['pourcentage'] . " and pourcentageMethane != -1";
        }
        if(sizeof($filtre) == 0){
            self::readAllToExcel();
        } else {
            $filename = 'RechercheSubstrats';
            $sql = "select id as 'Identifiant', Replace(nom, char(9), ' ') as 'Nom', ms as 'Masse Sèche', mv as 'Masse Volatile', ratiomsmv as 'Ration MS/MV', Replace(phosphore, char(9), ' ') as 'Phosphore',unitePhosphore, Replace(potassium, char(9), ' ') as 'Potassium', unitePotassium, Replace(azoteA, char(9), ' ') as 'Azote Ammonical', uniteAzoteA, Replace(azoteK, char(9), ' ') as 'Azote Kjeldahl', uniteAzoteK, bmpMV, bmpMF, pourcentageMethane from substrats where " . implode(' AND ', $filtre['where']) . ";";
            $result = Substrat::$pdo->query($sql);
            self::toExcel($result, $filename);
        }

    }

    public static function searchOnWebsite(){
        $filtre = array();
        if ($_POST['nom']!='') {
            $filtre['where'][] = "nom like '%" . $_POST['nom'] . "%'";
        }

        if ($_POST['categorie']!='') {
            $filtre['where'][] = "famille = '" . $_POST['categorie'] . "'";
        }

        if ($_POST['ms']!='') {
            $filtre['where'][] = 'ms ' . $_POST['selectMS'] . "'" . $_POST['ms'] . "' and ms != -1";
        }

        if ($_POST['mv']!='') {
            $filtre['where'][] = 'mv ' . $_POST['selectMV'] . "'" . $_POST['mv'] . "' and mv != -1";
        }
        if ($_POST['ratio']!='') {
            $filtre['where'][] = 'ratioMSMV ' . $_POST['selectRatio'] . "'" . $_POST['ratio'] . "' and ratioMSMV != -1";
        }
        if ($_POST['bmpMV']!='') {
            $filtre['where'][] = 'bmpMV ' . $_POST['selectBmpMV'] . "'" . $_POST['bmpMV'] . "' and bmpMV != -1";
        }
        if ($_POST['bmpMF']!='') {
            $filtre['where'][] = 'bmpMF ' . $_POST['selectBmpMF'] . "'" . $_POST['bmpMF'] . "' and bmpMF != -1";
        }
        if ($_POST['pourcentage']!='') {
            $filtre['where'][] = '0 + pourcentageMethane ' . $_POST['selectPourcentage'] . $_POST['pourcentage'] . " and pourcentageMethane != -1";
        }
        if(sizeof($filtre) == 0){
            self::readAllToExcel();
        } else {
            $tab_s = Substrat::read("Substrats", implode(' AND ', $filtre['where']), '*');
            $controller = "Substrat";
            $view = 'ListeSubstrats';
            $pagetitle = 'Liste Substrats';
            require(File::build_path(array('view', 'view.php')));
        }
    }
}



