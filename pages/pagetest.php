
<!DOCTYPE html>
<html>
  <head>
    <title>Employment Verification Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <select onchange="fetch_select(this.value)" id="cycle"> 
                  <?php
                   require_once "../Controler/niveauCtrl.php";
                   $ctrl=new niveauCtrl();
                   $result=$ctrl->getAllNiveau();
                   foreach($result as $niv){
                    echo "<option value='" . $niv['idNiv'] . "'>" .$niv['cycle'] . "</option>";
                   }
                  ?>
                    </select>

    <hr/>

            <select id="an"></select>
  
    <script type="text/javascript">
function fetch_select(val)
{

    $('#cycle').html('');
    $('#an').html('');
 $.ajax({
 type: 'post',
 url: '../Controler/ajaxdata.php',
 data: {idNiv : val},
 success: function (data) {

     $('#an').html(data);
 // document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>
</body>
</html>