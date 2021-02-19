<?php 
class article{
    private $titre;
    private $img;
    private $description; 
    private $concerne;


    public function __construct($titre,$img,$description,$concerne){
        $this->titre=$titre;
        $this->img=$img;
        $this->description=$description;
        $this->concerne=$concerne;
    }
}
?>