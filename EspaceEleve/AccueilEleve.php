<!DOCTYPE html>
<html>
  <head>
  <title>Eleve Info</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">

  </head>
  <body>
      <?php
      require_once "../Vue/EmploiTempsVue.php";
      require_once "../Controler/EleveCtrl.php";
      $eleveCtrl=new EleveCtrl();
      $eleve=$eleveCtrl->getEleveById(3);
      $vue=new EmploiTempsVue();
      $vue->getTable($eleve[0]['idNiv']);

      $s1="Pr";
      $s2="MSEParP";
      $res=stripos($s2,$s1);
      echo ($res ==true);
      
      ?>
  </body>

</html>