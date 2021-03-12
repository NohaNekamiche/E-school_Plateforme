<?php 
session_start();?>
<!DOCTYPE html>
<html>
  <head>
  <title>Eleve Info</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
  </head>
  <body>
      <?php
      require_once "../Vue/EleveVues/infopageVue.php";
      $vue=new infopageVue();
      $vue->getInfoAccount(3);
      $vue->getInfoEleve();

      ?>
</body>
<script type="text/javascript"> 
        function enable_disable() {  
          //  $("#idForm :input").prop("disabled", false);
            $("#idForm :input").removeAttr('disabled'); 

        } 
    </script> 
</html>