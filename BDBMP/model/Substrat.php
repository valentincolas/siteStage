<?php

require_once 'Model.php';

class Substrat extends Model{
    private $nom;
    private $ms;
    private $mv;
    private $ratioMsMv;
    private $phosphore;
    private $unitePhosphore;
    private $potassium;
    private $unitePotassium;
    private $azoteK;
    private $uniteAzoteK;
    private $azoteA;
    private $uniteAzoteA;
    private $bmpMv;
    private $bmpMf;
    private $pourcentageMethane;
    private $detail;
    private $famille;
    private $idCourbe;
    private $idPhoto;

    /**
     * Substrat constructor.
     * @param $nom
     * @param $ms
     * @param $mv
     * @param $ratioMsMv
     * @param $phosphore
     * @param $unitéPhosphore
     * @param $potassium
     * @param $unitéPotassium
     * @param $azoteK
     * @param $unitéAzoteK
     * @param $azoteA
     * @param $unitéAzoteA
     * @param $bmpMv
     * @param $bmpMf
     * @param $pourcentageMethane
     * @param $detail
     * @param $famille
     * @param $idCourbe
     * @param $idPhoto
     */
    public function __construct($nom, $ms, $mv, $ratioMsMv, $phosphore, $unitéPhosphore, $potassium, $unitéPotassium, $azoteA, $unitéAzoteA, $azoteK, $unitéAzoteK, $bmpMv, $bmpMf, $pourcentageMethane, $detail, $famille, $idCourbe, $idPhoto)
    {
        $this->nom = $nom;
        $this->ms = $ms;
        $this->mv = $mv;
        $this->ratioMsMv = $ratioMsMv;
        $this->phosphore = $phosphore;
        $this->unitePhosphore = $unitéPhosphore;
        $this->potassium = $potassium;
        $this->unitePotassium = $unitéPotassium;
        $this->azoteK = $azoteK;
        $this->uniteAzoteK = $unitéAzoteK;
        $this->azoteA = $azoteA;
        $this->uniteAzoteA = $unitéAzoteA;
        $this->bmpMv = $bmpMv;
        $this->bmpMf = $bmpMf;
        $this->pourcentageMethane = $pourcentageMethane;
        $this->detail = $detail;
        $this->famille = $famille;
        $this->idCourbe = $idCourbe;
        $this->idPhoto = $idPhoto;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getMs()
    {
        return $this->ms;
    }

    /**
     * @param mixed $ms
     */
    public function setMs($ms)
    {
        $this->ms = $ms;
    }

    /**
     * @return mixed
     */
    public function getMv()
    {
        return $this->mv;
    }

    /**
     * @param mixed $mv
     */
    public function setMv($mv)
    {
        $this->mv = $mv;
    }

    /**
     * @return mixed
     */
    public function getRatioMsMv()
    {
        return $this->ratioMsMv;
    }

    /**
     * @param mixed $ratioMsMv
     */
    public function setRatioMsMv($ratioMsMv)
    {
        $this->ratioMsMv = $ratioMsMv;
    }

    /**
     * @return mixed
     */
    public function getPhosphore()
    {
        return $this->phosphore;
    }

    /**
     * @param mixed $phosphore
     */
    public function setPhosphore($phosphore)
    {
        $this->phosphore = $phosphore;
    }

    /**
     * @return mixed
     */
    public function getPotassium()
    {
        return $this->potassium;
    }

    /**
     * @param mixed $potassium
     */
    public function setPotassium($potassium)
    {
        $this->potassium = $potassium;
    }

    /**
     * @return mixed
     */
    public function getAzoteA()
    {
        return $this->azoteA;
    }

    /**
     * @param mixed $azoteA
     */
    public function setAzoteA($azoteA)
    {
        $this->azoteA = $azoteA;
    }

    /**
     * @return mixed
     */
    public function getAzoteK()
    {
        return $this->azoteK;
    }

    /**
     * @param mixed $azoteK
     */
    public function setAzoteK($azoteK)
    {
        $this->azoteK = $azoteK;
    }



    /**
     * @return mixed
     */
    public function getBmpMv()
    {
        return $this->bmpMv;
    }

    /**
     * @param mixed $bmpMv
     */
    public function setBmpMv($bmpMv)
    {
        $this->bmpMv = $bmpMv;
    }

    /**
     * @return mixed
     */
    public function getBmpMf()
    {
        return $this->bmpMf;
    }

    /**
     * @param mixed $bmpMf
     */
    public function setBmpMf($bmpMf)
    {
        $this->bmpMf = $bmpMf;
    }

    /**
     * @return mixed
     */
    public function getPourcentageMethane()
    {
        return $this->pourcentageMethane;
    }

    /**
     * @param mixed $pourcentageMethane
     */
    public function setPourcentageMethane($pourcentageMethane)
    {
        $this->pourcentageMethane = $pourcentageMethane;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param mixed $famille
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }

    /**
     * @return mixed
     */
    public function getIdCourbe()
    {
        return $this->idCourbe;
    }

    /**
     * @param mixed $idCourbe
     */
    public function setIdCourbe($idCourbe)
    {
        $this->idCourbe = $idCourbe;
    }

    /**
     * @return mixed
     */
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }

    /**
     * @param mixed $idPhoto
     */
    public function setIdPhoto($idPhoto)
    {
        $this->idPhoto = $idPhoto;
    }

    /**
     * @return mixed
     */
    public function getUnitePhosphore()
    {
        return $this->unitePhosphore;
    }

    /**
     * @param mixed $unitePhosphore
     */
    public function setUnitePhosphore($unitePhosphore)
    {
        $this->unitePhosphore = $unitePhosphore;
    }

    /**
     * @return mixed
     */
    public function getUnitePotassium()
    {
        return $this->unitePotassium;
    }

    /**
     * @param mixed $unitePotassium
     */
    public function setUnitePotassium($unitePotassium)
    {
        $this->unitePotassium = $unitePotassium;
    }

    /**
     * @return mixed
     */
    public function getUniteAzoteK()
    {
        return $this->uniteAzoteK;
    }

    /**
     * @param mixed $uniteAzoteK
     */
    public function setUniteAzoteK($uniteAzoteK)
    {
        $this->uniteAzoteK = $uniteAzoteK;
    }

    /**
     * @return mixed
     */
    public function getUniteAzoteA()
    {
        return $this->uniteAzoteA;
    }

    /**
     * @param mixed $uniteAzoteA
     */
    public function setUniteAzoteA($uniteAzoteA)
    {
        $this->uniteAzoteA = $uniteAzoteA;
    }






    public function save() {
        $table_name = 'Substrats';
        $class_name= 'Substart';
        $columnStr = "";
        $valueStr = "";
        $values = array();
        $reflect = new ReflectionObject($this);
        foreach ($reflect->getProperties(ReflectionProperty::IS_PRIVATE) as $prop) {
            $col=$prop->getName();
            $columnStr.= "$col, ";
            $valueStr.= ":$col, ";
            $get = "get".ucfirst($col);
            $values[$col]=$this->$get();
        }

        //Supprime la dernière ','
        $columnStr = substr($columnStr, 0, -2);
        $valueStr = substr($valueStr, 0, -2);
        try {
            $sql = "INSERT INTO $table_name ($columnStr) VALUES ($valueStr)";
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->execute($values);
        } catch (PDOException $e) {

            echo $e->getMessage();

            return false;
        }
        return true;
    }


    public function update($id){
        $sql  = "UPDATE Substrats SET  nom = :nom, ms = :ms, mv = :mv, ratiomsmv = :ratio, phosphore = :phosphore, potassium = :potassium, azotek = :azotek, azotea = :azotea, bmpmv = :bmpmv, bmpmf = :bmpmf, pourcentagemethane = :pourcentage, famille = :famille where id = :id ";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            "nom" => $this->nom,
            "ms" => $this->ms,
            "mv" => $this->mv,
            "ratio" => $this->ratioMsMv,
            "phosphore" => $this->phosphore,
            "potassium" => $this->potassium,
            "azotek" => $this->azoteK,
            "azotea" => $this->azoteA,
            "bmpmv" => $this->bmpMv,
            "bmpmf" => $this->bmpMf,
            "pourcentage" => $this->pourcentageMethane,
            "id" => $id,
            "famille" => $this->famille
        );

        return $req_prep->execute($values);
    }


}
    
