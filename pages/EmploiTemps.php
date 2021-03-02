
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
          <div>
      
<?php
require_once "../Vue/EmploiTempsVue.php";
require_once "../Controler/niveauCtrl.php";
$level=new niveauCtrl();
$response=$level->getAllNiveau();
$tableVue=new EmploiTempsVue();
//$response=$tableVue->getAllSeances();
foreach($response as $rep){
        $tableVue->getTable($rep['idNiv']);
    }


?>  


</div>
      <form method="post">
        <div class="banner">
          <h1>Gestion des Emplois du temps des 3 cycles</h1>
        </div>
        <hr/>
        <fieldset>
          <legend>Gestion des Emplois du temps des 3 cycles </legend>
          <div class="item">  
          <div class="name-item">
                        <div >
                            <label>Cycle</label>
                            <select name="cycle"> 
                                    <option value="P">Primaire</option>
                                    <option value="M">Moyen</option>
                                    <option value="S">Secondaire</option>
                                    </select>
                        </div>
                        <div>
                                <label>Enseignants</label>
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
                <div class="name-item">
                        <div>
                            <label>Année</label>
                            <select name="annee"> 
                                <?php
                                require_once "../Controler/niveauCtrl.php";
                                $Nivctrl=new niveauCtrl();
                                $niveaux=$Nivctrl->getAllNiveau();
                                foreach($niveaux as $niv){
                                echo "<option value='" . $niv['annee'] . "'>" .$niv['annee'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                        <label>Groupe</label>
                                    <select name="grp"> 
                                        <?php
                                        foreach($niveaux as $niv){
                                                echo "<option value='" . $niv['grp'] . "'>Groupe " .$niv['grp'] . "</option>";
                                                }
                                                ?>
                                        ?>
                                    </select>
                        </div>
                </div>
                <br/>
                <div class="name-item">
                        <div>
                        <label>Matière</label>
                        <select name="modules"> 
                                <?php
                                require_once "../Controler/moduleCtrl.php";
                                $moduleCtrl=new moduleCtrl();
                                $modules=$moduleCtrl->getAllModules();
                                foreach($modules as $module){
                                    echo "<option value='" . $module['idModule'] . "'>" . $module['nomModule'] . "</option>";
                                }
                                ?>
                                </select>
                        </div>
                        <div>
                        <label>Jour</label>
                                    <select name="jour"> 
                                    <option value="Dimanche">Dimanche</option>
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    </select>
                        </div>
                </div>
                <div class="name-item">
                        <div>
                        <label>Heure Debut</label>
                                    <input type="time" name="debut"></input>
                        </div>
                        <div>
                        <label>Heure Fin</label>
                        <input type="time" name="fin"></input>
                        </div>
                </div>
          </div>
          </fieldset>
          <hr/>
            <fieldset>
            <div class="btn-block">
            <button type="submit" name="Ajouter">Ajouter </button>
            </div>
            </fieldset>
      </form>
   </div>
   <?php
    if(isset($_POST["Ajouter"])){
           // require_once '../Controler/seanceCtrl.php';
            $seancCtrl=new seanceCtrl();
            $seancCtrl->ajouterSeance($_POST['cycle'],$_POST['annee'],$_POST['grp'],$_POST['prof'],$_POST['jour'],
            $_POST['debut'],$_POST['fin'],$_POST['modules']);
    }
   ?>
  </body>
  </html>