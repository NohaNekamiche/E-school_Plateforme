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
}
?>