<!DOCTYPE html>
<html>
  <head>
  <title>Eleve Info</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../public/CSS/stylevues.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <?php
      require_once "../Vue/EmploiTempsVue.php";
      require_once "../Controler/EleveCtrl.php";
      require_once "../Controler/enseignantCtrl.php";
      require_once "../Vue/pageCyclesVue.php";
      require_once "../Vue/EnseignantVues/infopageVue.php";
      $vue2=new infopageVue();
      $vue1=new pageCyclesVue();
      $enseignantCtrl=new enseignantCtrl();
      $enseignant=$enseignantCtrl->getEnseignantByIdUser($_SESSION['userId']);
      $vue2->getMenu();
      if(count($enseignant)>0){
      echo '<h3 class="text-center">Liste Modules</h3><div class="testbox">';
      $vue2->getListeModules($enseignant['id']);
      echo '</div>';
   //   $vue=new EmploiTempsVue();
     // $vue->getTable($eleve[0]['idNiv']);
     $vue2->getReception($enseignant['id']);

      }
      $vue1->getTitleSectionArticle();
      $vue1->getArticleByCycle('E');
    $vue2->getContact();
      ?>
  </body>

</html>