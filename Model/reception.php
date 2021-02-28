<?php
require_once (__DIR__."/model.php");
class reception{


    public static function insertReception($idEnseignant,$heure,$jour){
        model::connexion();
        $request="INSERT INTO reception(idEn,heureReception,jourReception)
        VALUES ('$idEnseignant','$heure','$jour')";
        model::addRequest($request);
    }
}

?>