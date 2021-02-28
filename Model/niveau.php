<?php
require_once (__DIR__."/model.php");
class niveau{





    public static function getNiveauById($id){
       model::connexion();
        $request="SELECT * FROM niveau WHERE idNiv='$id'";
        $result=model::request($request);
        return $result;
    }
}
?>