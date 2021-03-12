<?php 
session_start();?>
<!DOCTYPE html>
<html>
  <head>
  <title>Eleve Info</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
  </head>
  <body>
      <?php
      require_once "../Vue/EmploiTempsVue.php";
      require_once "../Controler/EleveCtrl.php";
      require_once "../Vue/pageCyclesVue.php";
      echo $_SESSION['userId'];
      $vue1=new pageCyclesVue();
      $eleveCtrl=new EleveCtrl();

      echo '<div class="container"><h3>Emploi du temps</h3>';
      $eleve=$eleveCtrl->getEleveById(3);
      echo '</div><div class="align-self-center">';
      $vue=new EmploiTempsVue();
      $vue->getTable($eleve[0]['idNiv']);
      echo '</div>';
     
      $vue1->getTitleSectionArticle();
      $vue1->getArticleByCycle('Pa');

      ?>
  </body>

</html>