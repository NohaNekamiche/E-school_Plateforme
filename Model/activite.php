<?php
require_once (__DIR__."/model.php");
class activite{

    public static function getActovitiesByEleve($id){
        model::connexion();
        $request="SELECT * FROM activiteexrascolaire WHERE idEleve='$id'";
        return model::request($request);
    }
}
?>