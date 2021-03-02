<?php

require_once (__DIR__."/model.php");
class contact{

    public static function ajouterInfoPage($facebook,$insta,$link,$website,$adr,$num1,$num2,$fax){
        model::connexion();
        $requete="INSERT INTO pagecontact(facebook,insta,linkedin,website,
        address,numTel1,numTel2,fax)
        VALUES ('$facebook','$insta','$link','$website','$adr','$num1','$num2','$fax')";
        model::AddRequest($requete);
    }
    public static function getInfoPage(){
        model::connexion();
        $requete="SELECT * FROM pagecontact";
        return model::getField($requete);
    }
}
?>