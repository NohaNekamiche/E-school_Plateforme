<?php
require_once "../Model/eleve.php";
class  EleveCtrl{

    private $eleve;

    public function __construct(){
        $this->eleve = new eleve();
    }

    public function addEvele($email,$nom,$prenom,$dateNais,$idParent,$idNiv,$numTel1,$numTel2,$numTel3){

        eleve::addEvele($email,$nom,$prenom,$dateNais,$idParent,$idNiv,$numTel1,$numTel2,$numTel3);
    }

    public function getAllEleves(){
        return eleve::getAllEleves();
    }
    public function getEleveById($id){
        $result=eleve::getEleveById($id);

        if(count($result)==1){

        }else{

        }
        return $result;
    }
}
?>