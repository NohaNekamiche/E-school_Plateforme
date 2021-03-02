<?php
require_once "../Model/contact.php";
class pageContactCtrl{
    private $page;

    public function __construct(){
        $this->page = new contact();
    }

    public function ajouterInfoPage($facebook,$insta,$link,$website,$adr,$num1,$num2,$fax) {
            contact::ajouterInfoPage($facebook,$insta,$link,$website,$adr,$num1,$num2,$fax);
    }
    public function getInfoPage(){
        return contact::getInfoPage();
    }
}
?>