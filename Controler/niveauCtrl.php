<?php

require_once "../Model/niveau.php";
class niveauCtrl{
    private $niveau;
    public function __construct(){
        $this->niveau= new niveau();
    }

    public function getAllNiveau(){
        return niveau::getAllNiveau();
    }


    public function getNiveauById($id){
       return niveau::getNiveauById($id);
    }
    public function getNivId($cycle,$annee,$grp){
        return niveau::getNivId($cycle,$annee,$grp);
    }
}
?>