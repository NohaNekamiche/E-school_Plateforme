<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Employment Verification Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
  </head>
  <body>

    <?php
          require_once "../Vue/parentsVue.php";
          require_once '../Controler/EleveCtrl.php';
          $vue=new parentsVue();
          $vue-> getFormParent();
          $vue->getFormEnfant();
            if(isset($_POST["Ajouter"])){
              $_SESSION['idParent']=$vue->insertParent();
            }else
            {
              if(isset($_POST['AjouterEnfant'])){
             $vue->insertEnfant();
             ;}
            }
            
        ?>
  </body>
</html>