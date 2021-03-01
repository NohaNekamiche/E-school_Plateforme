<?php
require_once (__DIR__."/model.php");
class modules{
    public static function getAllModules(){
        model::connexion();
        $request="SELECT * FROM modules";
        return model::request($request);
    }
}
?>