<?php

require_once "../Model/niveau.php";
class niveauCtrl{
    private $niveau;
    public function __construct(){
        $this->niveau= new niveau();
    }


    public function getNiveauById($id){
       return niveau::getNiveauById($id);
    }
}
?>