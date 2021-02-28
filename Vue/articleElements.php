<?php 

require_once "../Controler/ArtcileCtrl.php";
class articleElements{

    private $controller;

    public function __construct(){
        $this->controller = new ArticleCtrl();
    }



    public function getArticleForm(){
        echo ' <div class="main-block">
        <form method="post" enctype="multipart/form-data">
          <h1>Ajouter Article</h1>
          <div class="info">
            <input class="fname" type="text" name="titre" placeholder="Titre">
            <h5>Choisir les utilisateurs les plus concernés par cet article</h5>
            <div class = "container">
                <div class="row">
                  <div class="col-12">
                    <ul>
                      
                    <li>
                        <label class="container">Enseignants
                          <input type="checkbox" name="choix[]"  value="E" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                    </li>
                      
                    <li>
                        <label class="container">Primaire
                          <input type="checkbox" name="choix[]"  value="Pr" >
                          <span class="checkmark"></span>
                        </label>
                    </li>
                      
                    <li>
                        <label class="container">Moyen
                          <input type="checkbox" name="choix[]"  value="M" >
                          <span class="checkmark"></span>
                        </label>
                    </li>
                      
                    <li>
                        <label class="container">Secondaires
                          <input type="checkbox" name="choix[]"  value="S" >
                          <span class="checkmark"></span>
                        </label>
                    </li>
                      
                      <li>
                        <label class="container">Parents
                          <input type="checkbox" name="choix[]"  value="Pa" >
                          <span class="checkmark"></span>
                        </label>
                    </li>
                <li>
                        <label class="container">Tous
                          <input type="checkbox" name="choix[]"  value="T" >
                          <span class="checkmark"></span>
                        </label>
                    </li>
                      
                    
                    </ul>
                  </div>
                </div>
              </div>
            <label class="file">
            <input type="file" id="file" aria-label="File browser example" name="img">
            <span class="file-custom"></span>
          </label>
          </div>
          <p>Description</p>
          <div>
            <textarea rows="4" name="description"></textarea>
          </div>
          <button type="submit"  name="Ajouter">Ajouter Article</button>
        </form>
        
            
      </div>';
    }


    
    function ajouterArticle(){
      if(isset($_POST["Ajouter"])){
   
        if(isset($_POST['titre']) && isset($_POST['description'])){
           $this->controller->ajouterArticle($_POST['titre'],$_POST['description']);
          //  header("location: ".$_SESSION["ROOT_URL"]."/projet_web/AccueilAdmin/pageAccieulAdmin.php");
          
      }
       
    }
}}
?>