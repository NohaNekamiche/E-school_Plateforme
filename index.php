<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="public/CSS/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
    <?php
            require_once '/Vue/LoginVue.php';

            $log= new LoginVue();

            $log->getForm();
            if(isset($_POST["Login"])){
                $log->login($_POST['username'],$_POST['password']);
            }
        ?>


    </body>
</html>

<?php?>
