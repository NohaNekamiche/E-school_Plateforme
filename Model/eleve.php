<?php
require_once (__DIR__."/model.php");
require_once (__DIR__."/user.php");
class eleve{

    
    public static function addEvele($email,$nom,$prenom,$dateNais,$idParent,$idNiv,$numTel1,$numTel2,$numTel3){
        $password=$nom.$prenom;
        $idUser=user::ajouterUser($email,$password,$prenom);
        $requete= "INSERT INTO eleves (nom,prenom,dateNais,idParent,idUser,idNiv,numTel1,numTel2,numTel3)
        VALUES ('$nom','$prenom','$dateNais','$idParent','$idUser','$idNiv','$numTel1','$numTel2','$numTel3')";
        return model::getIdOfInsertElement($requete);
    }

    public static function getAllEleves(){
        model::connexion();
        $requete="SELECT * From eleves";
        $result=model::request($requete);
        return $result;
    }

}
?>