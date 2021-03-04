<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>Reception Primire Info</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
    </head>
  <body>
  </body>
  <?php
  require_once "../Vue/EmploiTempsVue.php";
  require_once "../Controler/niveauCtrl.php";
  $vue=new EmploiTempsVue();
  $nivCtrl=new niveauCtrl();
  $niveaux=$nivCtrl-> getNivByCycle('S');
  foreach($niveaux as $niv){
    $vue->getTable($niv['idNiv']);
  }

  ?>
  </html>