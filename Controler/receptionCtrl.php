<?php
require_once "../Model/reception.php";
class receptionCtrl{
    private $reception;
    public function __construct(){
        $this->reception= new reception();
    }
    public function insertReception($idEnseignant,$heure,$jour){
        reception::insertReception($idEnseignant,$heure,$jour);
    }

}
?>