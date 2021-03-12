<?php
require_once (__DIR__."/model.php");
class note{

    public static function getNotesById($idNiv){

    }
    public static function getNotesByIdEleve($idEleve){
        model::connexion();
        $request="SELECT * FROM notes WHERE idEleve='$idEleve'";
        return model::request($request);
    }
}

?>