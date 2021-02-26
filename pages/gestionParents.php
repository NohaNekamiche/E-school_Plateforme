<!DOCTYPE html>
<html>
  <head>
    <title>Employment Verification Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
  </head>
  <body>
    <div class="testbox">
    <form action="/">
      <div class="banner">
        <h1>Gestion des Parents d'éleve Tuteur</h1>
      </div>
      <hr/>
      <fieldset>
        <legend>Creation du compte Parent</legend>
        <div class="item">
          <div class="name-item">
            <div>
                <input type="text" name="nom" placeholder="Nom" required />
            </div>
            <div>
                <input type="text" name="prenom" placeholder="Prenom" required />
            </div>
            <div class="item">
                    <label for="email">Email<span>*</span></label>
                    <input id="email" type="text" name="text" required/>
            </div>
          </div>
          
        </div>
      </fieldset>
      </br>
      <fieldset>
      <legend>Parent Information</legend>
      <div class="item">
          <div class="name-item">
            <div>
                <input type="text" name="address" placeholder="Adress" required />
            </div>
            <div>
                <input type="text" name="num1" placeholder="Numero Tel 1" required/>
            </div>
            <div>
                <input type="text" name="num2" placeholder="Numero Tel 2" required/>
            </div>
            <div>
                <input type="text" name="num3" placeholder="Numero Tel 3" required/>
            </div>
          </div>
          
        </div>
      <div class="item">
      <label for="bdate">Date de Naissance<span>*</span></label>
      <input id="bdate" type="date" name="date" required/>
      <i class="fas fa-calendar-alt"></i>
      </div>
      <fieldset>
      <div class="btn-block">
      <button type="submit" href="/">APPLY</button>
      </div>
    </form>
    </div>
  </body>
</html>