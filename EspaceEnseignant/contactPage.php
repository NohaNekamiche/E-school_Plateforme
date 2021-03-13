<!DOCTYPE html>
<html>
  <head>
    <title>Contact form</title>
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
      require_once "../Vue/EnseignantVues/infopageVue.php";

   $vue=new infopageVue();
   $vue->getMenu();
   $vue->getPageContact();
   $vue->getContact();
   ?>
  </body>
</html>