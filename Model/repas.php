<?php
require_once (__DIR__."/model.php");
class repas{
    public static function ajouterRepas($nom,$imgUrl,$description,$jour){
        $db =model::connexion();
        $requete1="SELECT * FROM repas WHere jour='$jour'";
        $result=model::request($requete1);
        if(count($result)>0 ){
            //update
            $id=$result[0]['idRepas'];
            $update="UPDATE repas SET nom='$nom',description='$description',imgUrl='$imgUrl',jour='$jour'
            WHERE idRepas='$id'";
            model::addRequest($update);
        }
        else{
        $requete2= "INSERT INTO repas ( nom,description	,imgUrl,jour)
                VALUES ('$nom','$description','$imgUrl','$jour')";
        model::addRequest($requete2);}

    }

    public static function getAllRepas(){
        model::connexion();
        $request="SELECT * FROM repas";
        return model::request($request);
    }
    public static function deleteById($id){
        model::connexion();
        $request="DELETE FROM repas WHERE idRepas='$id'";
        model::delete($request);
    }


}
?>