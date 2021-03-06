<?php
require_once "../Model/parent.php";
class parentCtrl{
    private $parent;

    public function __construct(){
        $this->parent = new parents();
    }
    public function ajouterParent($email,$nom,$prenom,$dateNaiss,$adress,$numTel1,$numTel2,$numTel3){
        return parents::ajouterParent($email,$nom,$prenom,$dateNaiss,$adress,$numTel1,$numTel2,$numTel3);
    }
    public function getLastInsert(){
        return parents::getLastInsert();
    }


    public function getAllParents(){
        return parents::getAllParents();
    }
    public function deleteParentById($id,$idUser){
        parents::deleteParentById($id,$idUser);
    }
    public function getParentById($id){
        return parents::getParentById($id);
    }

    public function getParentByIdUser($idUser){
        return parents::getParentByIdUser($idUser);
    }
}
?>