<?php 

require_once "../../Controler/ArtcileCtrl.php";
class articleElements{

    private $controller;

    public function __construct(){
        $this->controller = new ArticleCtrl();
    }



    public function getArticleForm(){
        echo ' <div class="main-block">
        <form action="/" method="post">
          <h1>Ajouter Article</h1>
          <div class="info">
            <input class="fname" type="text" name="titre" placeholder="Titre">
            <input type="text" name="concerne" placeholder="Persones Concerne">
            <label class="file">
            <input type="file" id="file" aria-label="File browser example" name="img">
            <span class="file-custom"></span>
          </label>
          </div>
          <p>Description</p>
          <div>
            <textarea rows="4" name="description"></textarea>
          </div>
          <button type="submit" href="/" name="Ajouter">Ajouter Article</button>
        </form>
        
            
      </div>';
    }


    
    function ajouter($titre,$img,$description,$concerne){
        if(isset($titre) && isset($img)&& isset($description)&& isset($concerne)){
            echo $titre;
             $this->controller->ajouterArticle($titre,$img,$description,$concerne);
              header("location: ".$_SESSION["ROOT_URL"]."/projet_web/AccueilAdmin/pageAccieulAdmin.php");
            
        }
    }
}
?>