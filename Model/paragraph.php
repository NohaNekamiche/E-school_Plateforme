<?php

class paragraph{
    private $texte;
    private $img;


    public function __construct($texte,$img){
        $this->texte=$texte;
        $this->img=$img;
    }

    public function setTexte($texte){
        $this->texte=$texte;
    }
    public function setImg($img){
        $this->img=$img;
    }
}
?>