<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Presentation Page</title>
          
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--  CSS Files -->
        <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../public/CSS/stylevues.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
  <body>

    <?php 
      require_once ("../Vue/components/AccuielEcoleElements.php");
      $vue=new AccuielEcoleElements();

      $vue->getPresentationPage();
      $vue->getContact();
    ?>


  </body>
</html>
<style>


body {
 
  max-width: 900px;
  margin: 30px auto;
  padding: 20px;
/*   outline: 1px solid #ccc; */
}

/* Still use global css (not utility css) for base typography etc? */
p {
  margin-bottom: 0.8em;
}
</style>