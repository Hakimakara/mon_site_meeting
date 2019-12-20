<?php

$title = 'Se connecter';
ob_start();

?>

<!--<div class="content">
    <form action="connexion.php" method="post">
        <p> Entrer vos identifiants pour vous connecter:</p><br/>
        <div class="center">
            <label for="login">Nom d'utilisateur</label>
            <input type="text" name="login" id="login" /><br />
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" />  <br />
            <input type="submit" value="Connexion" />
        </div>
                   </form>

 </div>-->
 <div align="center">
       <br><br>
         <fieldset id="field1" style="color " >
         <p> Entrer vos identifiants pour vous connecter</p>
         <form method="post" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="login">Nom d'utilisateur </label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom d'utilisateur" id="login" name="login" />
                  </td>
               </tr>
               <td><td>
               <td><td>
                <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe </label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                    <td></td>
                    <td align="center"> 
                        <p><input type="submit" value="Connexion"/></p>
                    </td>
               </tr>
            <td></td>
                    <td> vous n'avez pas encore de compte?<a href="./s'inscrire.php">s'inscrit?</a ></td>
        </fieldset>
            </table>
            </form>
       </body>
   </html>
<?php
$content = ob_get_clean();
require 'views/template.php';
?>