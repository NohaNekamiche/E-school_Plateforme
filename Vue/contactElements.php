<?php
require_once "../Controler/pageContactCtrl.php";
class contactElements{
    private $controller;

    public function __construct(){
        $this->controller = new pageContactCtrl();
    }
    


    public function getForm(){
        echo '  <div class="testbox"><form method="post">
        <fieldset>
          <legend>Gestion de Page de Contact </legend>
          <div class="item">
          <div>
          <input type="text" name="facebook" placeholder="Facebook Link" required/>
          </div>
          <div>
          <input type="text" name="insta" placeholder="Insta Link" required/>
          </div>
          <div>
          <input type="text" name="linkedin" placeholder="LinkedIn Link" required/>
          </div>
          <div>
          <input type="text" name="website" placeholder="Siteweb Lien" required/>
          </div>
          <div>
          <input type="text" name="adr" placeholder="Adress" required/>
          </div>
          <div>
          <input type="text" name="num1" placeholder="Numero Tel 1" required/>
          </div>
          <div>
          <input type="text" name="num2" placeholder="Numero Tel 2" required/>
          </div>
          <div>
          <input type="text" name="fax" placeholder="Fax" required/>
          </div>
          </div>
          <hr/>
            <fieldset>
            <div class="btn-block">
            <button type="submit" name="Ajouter">Sauvegarder</button>
            </div>
            </fieldset>
          </fieldset>
          </form></div>';
    }
     public function getTable(){

        $result=   $this->controller-> getInfoPage();
        echo '
        
        <table>
      <caption><h3>Information de la page</h3></caption>
        <thead>
        <th>Facebook lien</th>
        <th>Insta lien</th>
        <th>LinkedIn lien</th>
        <th>siteweb lien</th>
        <th>address</th>
        <th>N Tel 1</th>
        <th>N Tel 2</th>
        <th>Fax</th>
        <th colspan="2">Action </th>
        ';
        if(count($result)>0){
               echo '<tr>
               <td>'.$result['facebook'].'</td>
               <td>'.$result['insta'].'</td>
               <td>'.$result['linkedin'].'</td>
               <td>'.$result['website'].'</td>
               <td>'.$result['address'].'</td>
               <td>'.$result['numTel1'].'</td>
               <td>'.$result['numTel2'].'</td>
               <td>'.$result['fax'].'</td>
               <td> <a href="ContactVue.php?edit='.$result['id'].'"
               ><button class="btn-block">Modifier</button></a>
             </td>
             <td> <a href="ContactVue.php?delete='.$result['id'].'"
               ><button class="btn-block">Supprimer</button></a>
             
             </td>
               </tr></thead></table>'; 
               if(isset($_GET['delete']))
               {
                   $id=$_GET['delete'];
                   echo $id;
                   $this->controller->deletById($id);
                 
               }
               if(isset($_GET['edit'])){
                 echo $_GET['edit'];
                 $id=$_GET['edit'];
               }
        }else{
         echo ' </thead></table>';
        };
        
     }

     public function ajouterInfo(){
         if(isset($_POST['Ajouter'])){
             $this->controller->ajouterInfoPage($_POST['facebook'],$_POST['insta'],$_POST['linkedin'],
            $_POST['website'],$_POST['adr'],$_POST['num1'],$_POST['num2'],$_POST['fax']);
         }
     }
}
?>