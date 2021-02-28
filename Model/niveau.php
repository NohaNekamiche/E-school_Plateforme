<?php
require_once (__DIR__."/model.php");
class niveau{
    public static function getAllNiveau(){
       model::connexion();
       $request="SELECT * FROM niveau";
       return  model::request($request);
    }




    public static function getNiveauById($id){
       model::connexion();
        $request="SELECT * FROM niveau WHERE idNiv='$id'";
        $result=model::request($request);
        return $result;
    }
    public static function getNivId($cycle,$annee,$grp){
        model::connexion();
        $request="SELECT idNiv FROM niveau WHERE annee='$annee' AND grp='$grp' AND cycle='$cycle'";
        return model::request($request);
    }
}
?>