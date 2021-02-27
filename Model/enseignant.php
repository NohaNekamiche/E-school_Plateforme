<?php
require_once (__DIR__."/model.php");
require_once (__DIR__."/user.php");
class enseignant{
    public static function addEnseignant($email,$nom,$prenom,$dateNais,$adress,$idModule,
    $numTel1,$numTel2,$numTel3,$hour,$jour){
        $password=$nom.$prenom;
        $idUser=user::ajouterUser($email,$password,$prenom);
        $requete= "INSERT INTO enseignants (nom,prenom,dateNais,adress,numTel1,numTel2,numTel3,idModule,
        idUser,	heureReception,jourReception)
        VALUES ('$nom','$prenom','$dateNais','$adress','$numTel1','$numTel2','$numTel3',
        '$idModule','$idUser','$hour','$jour')";
        return model::getIdOfInsertElement($requete);
    }
}
?>