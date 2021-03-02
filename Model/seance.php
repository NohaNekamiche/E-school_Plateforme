<?php
require_once (__DIR__."/model.php");

class seance{

    public static function ajouterSeance($idNiv,$idEnseignant,$jour,$hdebut,$hfin,$idModule){
        model::connexion();
        $request="INSERT INTO seances (jour,heureDebut,heureFin,idEnseignant,idNiv,idModule)
        VALUES ('$jour','$hdebut','$hfin','$idEnseignant','$idNiv','$idModule')";
        model::request($request);
    }

    public static function getSeanceByDate($jour,$idNiv){
        model::connexion();
        $request="SELECT * FROM seances WHERE jour='$jour'  AND idNiv='$idNiv'";
        return model::request($request);
    }
    public static function getAllSeances(){
        $request="SELECT * FROM seances";
        model::connexion();
        return model::request($request);
    }

}

?>