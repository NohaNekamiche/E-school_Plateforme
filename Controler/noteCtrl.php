<?php

require_once "../Model/note.php";

class noteCtrl{
    private $note;
    public function __construct(){
        $this->note= new note();
    }

    public function getNotesByIdEleve($idEleve){
        return note::getNotesByIdEleve($idEleve);
    }
}
?>