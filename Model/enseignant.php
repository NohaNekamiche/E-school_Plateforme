<?php
require_once (__DIR__."/model.php");
require_once (__DIR__."/user.php");
class enseignant{
    public static function addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,
    $numTel1,$numTel2,$numTel3){
        $password=$nom.$prenom;
        $idUser=user::ajouterUser($email,$password,$prenom);
        $requete= "INSERT INTO enseignants (nom,prenom,dateNais,adress,numTel1,numTel2,numTel3,idModule,
        idUser)
        VALUES ('$nom','$prenom','$dateNais','$adress','$numTel1','$numTel2','$numTel3',
        '$idModule','$idUser')";
        return model::getIdOfInsertElement($requete);
    }

    public static function getAllEnseignants(){
        model::connexion();
        $requete="SELECT * From enseignants";
        $result=model::request($requete);
        return $result;
    }
    public static function getInfoAccount($idUser){
        $requete="SELECT * FROM users WHERE idUser='$idUser'";
        return model::request($requete);
    }

    public static function  getprofByIdMod($id){
        model::connexion();
        $requete="SELECT * From enseignants WHERE idModule='$id'";
        return model::request($requete);
    }

    public static function getProfById($id){
        model::connexion();
        $requete="SELECT * FROM enseignants WHERE id='$id'";
        return model::getField($requete);
    }
    public static function getEnseignantByIdUser($id){
        model::connexion();
        $requete="SELECT * From enseignants where idUser='$id'";
        $result=model::getField($requete);
        return $result;
    }
    public static function updateENseignant($id,$idModule){
        model::connexion();
        $requete="UPDATE enseignants SET idModule='$idModule' WHERE id='$id'";
        model::addRequest($requete);

    }
}
?>