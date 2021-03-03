<?php
require_once (__DIR__."/model.php");
class reception{


    public static function insertReception($idEnseignant,$heure,$jour){
        model::connexion();
        $request="INSERT INTO reception(idEn,heureReception,jourReception)
        VALUES ('$idEnseignant','$heure','$jour')";
        model::addRequest($request);
    }

    public static function getReceptionByidprofJour($idEnseignant,$jour){
        model::connexion();
        $requeste="SELECT * FROM reception WHERE idEn='$idEnseignant' AND jourReception='$jour'";
        return model::getField($requeste);
    }
}

?>