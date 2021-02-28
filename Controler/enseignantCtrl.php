<?php
require_once "../Model/enseignant.php";
class enseignantCtrl{
    private $enseignant;

    public function __construct(){
        $this->enseignant = new enseignant();
    }

    public function addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,$numTel1,$numTel2,$numTel3,$hour,$jour){

        enseignant::addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,$numTel1,$numTel2,$numTel3,$hour,$jour);
    }

    public function  getAllEnseignants(){
       return enseignant:: getAllEnseignants();
    }
}
?>