<?php
require_once "../Model/enseignant.php";
class enseignantCtrl{
    private $enseignant;

    public function __construct(){
        $this->enseignant = new enseignant();
    }

    public function addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,$numTel1,$numTel2,$numTel3){

        enseignant::addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,$numTel1,$numTel2,$numTel3);
    }

    public function  getAllEnseignants(){
       return enseignant:: getAllEnseignants();
    }
    public function getInfoAccount($idUser){
        return enseignant::getInfoAccount($idUser);
    }

    public function getprofByIdMod($id){
        return enseignant::getprofByIdMod($id);
    }
}
?>