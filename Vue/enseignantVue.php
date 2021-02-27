<?php
require_once "../Controler/enseignantCtrl.php";
class enseignantVue{
    private $controller;

    public function __construct(){
        $this->controller = new enseignantCtrl();
    }

}
?>