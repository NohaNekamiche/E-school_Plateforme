<!DOCTYPE html>
<?php
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
        <div class="main-block">
            <h1>Login</h1>
            <form method="post" >
                <hr>
                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="username" id="name" placeholder="Username" required/>
                
                <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
                <input type="password" name="password" id="name" placeholder="Password" required/>
                <hr>
                <div class="btn-block">
                    <button type="submit" name="Login">Login</button>
                    
                  </div>
            </form>
        </div>  
    </body>
</html>

