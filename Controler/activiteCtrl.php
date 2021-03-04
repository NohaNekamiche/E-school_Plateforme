<?php
require_once "../Model/activite.php";
class activiteCtrl{
    private $activite;

    public function __construct(){
        $this->activite = new activite();
    }
    public function getActovitiesByEleve($id){
        return activite::getActovitiesByEleve($id);
    }
}
?>