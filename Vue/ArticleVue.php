<!DOCTYPE html>
<?php
//tester request
function getArticles(){
$servername = 'localhost';
$db = 'e-school';
$username = 'root';
$password = '';
$result=null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT idArticle,titre,descrption,imageUrl,concerner FROM articles ORDER BY idArticle");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  return $result;
}
$articles=getArticles();
?>
<html>
<head>
        <title>Login form</title>
        <link rel="stylesheet" href="../public/CSS/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
       <?php
       foreach($articles as $article):?>
       <h2><?= $article->titre ?></h2>
       <p><?= $article->descrption ?></p>
       <?php endforeach; ?>
       
    
    </body>
</html>

