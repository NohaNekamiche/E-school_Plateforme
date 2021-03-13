
<!DOCTYPE html>
<html>
  <head>
    <title>Employment Verification Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">

  </head>
  <body>


  <div class="testbox">
      <form method="post">
        <div class="banner">
          <h1>Gestion des Enseignants </h1>
        </div>
        <hr/>
        <fieldset>
          <legend>Gestion de Reception </legend>
          <div class="item">
          <div class="name-item">
              <select name="prof"> 
                  <?php
                   require_once "../Controler/enseignantCtrl.php";
                   $ctrl=new enseignantCtrl();
                   $result=$ctrl-> getAllEnseignants();
                   foreach($result as $row){
                       echo "<option value='" . $row['id'] . "'>" . $row['nom'] ."  ".$row['prenom'] . "</option>";
                   }
                  ?>
              </select>
          </div>
        </div>
          <div class="item">
            <div class="name-item">
              <div>
                  <input type="time" name="heure" placeholder="Heure de Reception" required />
              </div>
              <div>
                 <select name="jour">
                    <option value="dimanche">Dimanche</option>
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                 </select>
              </div>
            </div>
            
          </div>
          <div class="btn-block">
        <button type="submit" name="recp">Ajouter</button>
        </div>
        </fieldset>
        </br>
        <fieldset>
        <legend>Gestion de class d'Enseignant </legend>
        <div class="item">
          <div class="name-item">
              <select name="prof"> 
                  <?php
                   require_once "../Controler/enseignantCtrl.php";
                   $ctrl=new enseignantCtrl();
                   $result=$ctrl-> getAllEnseignants();
                   foreach($result as $row){
                       echo "<option value='" . $row['id'] . "'>" . $row['nom'] ."  ".$row['prenom'] . "</option>";
                   }
                  ?>
              </select>
          </div>
        </div>
        <div class="item">
            <div class="name-item">
            <label>Cycle d'etude</label>
                            <select name="cycle"> 
                                    <option value="P">Primaire</option>
                                    <option value="M">Moyen</option>
                                    <option value="S">Secondaire</option>
                                    </select>
                   
               
     
                    <label> Annee D'etude</label>
    
              <select name="annee"> 
                
              <?php
                   require_once "../Controler/niveauCtrl.php";
                   $ctrl=new niveauCtrl();
                   $result=$ctrl->getAllNiveau();
                   foreach($result as $niv){
                  
                    echo "<option value='" . $niv['annee'] . "'>" .$niv['annee'] . "</option>";
                   }
                  ?>
                    </select>
           </div>
           <div class="name-item">
           <label> Groupe</label>
           <select name="grp"> 
                  <?php
                   foreach($result as $niv){
                    echo "<option value='" . $niv['grp'] . "'>" .$niv['grp'] . "</option>";
                   }
                  ?>
                    </select>
            </div> 
          </div>
          <div class="name-item">
          <label> Module</label>
          <select name="module">
          <?php
          require_once "../Controler/moduleCtrl.php";
          $modctr=new moduleCtrl();
          $modules=$modctr->getAllModules();
          foreach($modules as $m){
          echo "<option value='" . $m['idModule'] . "'>" .$m['nomModule'] . "</option>";
        }
          ?>
          </select>
          </div>
       <hr/>
        
        <fieldset>
        <div class="btn-block">
        <button type="submit" name="Ajouter">Ajouter</button>
        </div>
        </fieldset>
        <hr/>
      </form>
  </div>
<!--?php
   require_once "../Vue/enseignantVue.php";
   $vue= new enseignantVue();
   $vue->getReceptionInfo();
   $vue-> getHeureTravailForm();
   $vue-> getClassInfoForm();
?-->
<?php
require_once "../Controler/receptionCtrl.php";
require_once "../Controler/niveauCtrl.php";
require_once "../Controler/enseignantCtrl.php";

$recp=new receptionCtrl();
$nivCtrl= new niveauCtrl();
if(isset($_POST['recp'])){
$recp->insertReception($_POST['prof'],$_POST['heure'],$_POST['jour']);
}
if(isset($_POST['Ajouter'])){
$niv=$nivCtrl->getNivId($_POST['cycle'],$_POST['annee'],$_POST['grp']);

//echo $niv['idNiv'];
$ctrl1=new enseignantCtrl(); 
$ctrl1->updateENseignant($_POST['prof'],$_POST['module']);

}
?>
</body>
</html>