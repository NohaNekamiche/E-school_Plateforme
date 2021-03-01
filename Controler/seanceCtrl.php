<?php
require_once '../Model/seance.php';
require_once '../Model/niveau.php';
class seanceCtrl{
    private $seance;
    public function __construct(){
        $this->seance = new seance();
    }
    public function  ajouterSeance($cycle,$annee,$grp,$idEnseignant,$jour,$hdebut,$hfin,$idModule){
        $result=niveau::getNivId($cycle,$annee,$grp);
        if(count($result)>0){
            $idNiv=$result[0]['idNiv'];
            echo $idNiv;
        seance::ajouterSeance($idNiv,$idEnseignant,$jour,$hdebut,$hfin,$idModule);
    }
    }
    public function getSeanceByDate($jour,$idNiv){
       return seance::getSeanceByDate($jour,$idNiv);
    }
    public function get(){}
    
}
?>