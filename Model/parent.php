<?php

require_once (__DIR__."/model.php");
require_once (__DIR__."/user.php");
class parents{

    public static function  ajouterParent($email,$nom,$prenom,$dateNaiss,$adress,$numTel1,$numTel2,$numTel3){
        //$db=model::connexion();
        $password=$nom.$prenom;
        $id=user::ajouterUser($email,$password,$prenom);
        $requete= "INSERT INTO parents (nom,prenom,dateNais,adress,numTel1,numTel2,numTel3,idUser)
        VALUES ('$nom','$prenom','$dateNaiss','$adress','$numTel1','$numTel2','$numTel3','$id')";
        return model::getIdOfInsertElement($requete);

    }
    public static function getLastInsert(){
        return model::getLastId();
    }

    public static function getAllParents(){
        model::connexion();
        $requete="SELECT * From parents";
        $result=model::request($requete);
        return $result;
    }

  /*  public static function getIdUserParent($id){
        model::connexion();
        $requeste="SELECT idUser FROM parents WHERE id='$id'"
        $result=model::request($requeste);
        return $result;
    }*/
    public static function deleteParentById($id,$idUser){
            model::connexion();
            // user::deleteUserById($idUser);
            $requeste="DELETE FROM parents WHERE id='$id'";
            $requete="DELETE FROM users WHERE idUser='$idUser'";
            model::delete($requete);
            model::delete($requeste);
    }
    public static function getParentById($id){
        model::connexion();
        $requeste="SELECT * FROM parents WHERE id='$id'";
        return model::getField($requeste);
    }

    public static function getParentByIdUser($idUser){
        model::connexion();
        $requeste="SELECT * FROM parents WHERE idUser='$idUser'";
        return model::getField($requeste);
    }
}
?>