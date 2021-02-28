<?php
require_once "../Model/modules.php";
class moduleCtrl{
    private $module;
    public function __construct(){
        $this->module= new modules();
    }
    public function getAllModules(){
        return modules::getAllModules();
    }

}
?>