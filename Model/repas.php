<?php
require_once (__DIR__."/model.php");
class repas{
    public static function ajouterRepas($nom,$imgUrl,$description,$jour){
        $db =model::connexion();
        $requete = "INSERT INTO repas ( nom,description	,imgUrl,jour)
                VALUES ('$nom','$description','$imgUrl','$jour')";
        model::addRequest($requete);

    }
}
?>