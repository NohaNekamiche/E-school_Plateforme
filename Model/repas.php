<?php
class repas{
    private $titre;
    private $description;
    private $img;


    public function __construct($titre,$description,$img){
        $this->titre=$titre;
        $this->description=$description;
        $this->img=$img;
    }
   public function setTitre($titre){
        $this->titre=$titre;
    }
    public function setDescript($description){
        $this->description=$description;
    }
    public function setDescript($img){
        $this->img=$img;
    }
}
?>