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

     function getDebutArticle(){
      echo '
      <div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Articles</h4>
        <p>Dans cette section on vous presente les dernier articles publie dans l"ecole </p>
      </div>
    </div>';
    }
    function getArticle(){
      $this->controller->getIdLastArticle();
      echo ' <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex"><div class="media-body text-center">
              <h3>278</h3>
              <span>New Posts</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>'.'
  </section>
  
 
  </div>'
              ;
    }
}}
?>