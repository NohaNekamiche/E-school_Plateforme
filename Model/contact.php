<?php

require_once (__DIR__."/model.php");
class contact{

    public static function ajouterInfoPage($facebook,$insta,$link,$website,$adr,$num1,$num2,$fax,$email,$descpt){
        model::connexion();
        $requete="INSERT INTO pagecontact(facebook,insta,linkedin,website,address,numTel1,numTel2,fax,email,descpt)
        VALUES ('$facebook','$insta','$link','$website','$adr','$num1','$num2','$fax','$email','$descpt')";
        model::AddRequest($requete);
    }
    public static function getInfoPage(){
        model::connexion();
        $requete="SELECT * FROM pagecontact";
        return model::getField($requete);
    }

    public static function deletById($id){
        model::connexion();
        $requete="DELETE FROM pagecontact WHERE id='$id'";
        model::delete($requete);
    }
}
?>