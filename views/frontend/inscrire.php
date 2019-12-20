<?php

 $title = 'Accueil Meeting Aérien';
 ob_start();

?>


<div class="container">
    <div class="heading">
        <h2>Formulaire d'inscription</h2>
   <div class="info"> 
<p> Formulaire d'inscription Bénévole pour le Meeting Aérien Des Étoiles et Des Ailes.</p>
<p> Le Meeting Aérien Des Etoiles et Des Ailes se déroulera les samedi 26 et dimanche 27 Septembre à l'Aéroport de Francazal à Cugnaux.</p>
<p> Nous avons besoins de bénévoles sur ces deux jours, mais aussi sur les deux jours précédent pour le montage, 
et les jours d'après pour le démontage.</p>

<p> Remplissez correctement ce formulaire afin que nous puissions vous recontacter.
Plus d'informations sur les jours et les besoins sont à venir.</p>

    </div>
</div>

<div class="listItem">
    <form class="needs-validation" novalidate>
         <!-- verification et validation -->

       <div class="form-row">
           <div class="col-md4 mb-3">
            <label for="login">Login </label>
            <input type="text" class="form-control" id="validationCustom01"/>
            <div class="valid-feedback">
            Looks good
            </div>
        </div>

        <!-- <div class="form-row">
           <div class="col-md4 mb-3">
            <label for="mpd">Mot de passe </label>
            <input type="password" class="form-control" id="validationCustom01"/>
            <div class="valid-feedback">
            Looks good
            </div>
        </div> -->
      

         <div class="col-md4 mb-3">
        <label class="form-row" for="mdp1">Mot de passe </label>
        <input name="pwd1" id="pwd1" type="password" />
        <span class="tooltip">Le mot de passe ne doit pas faire moins de 6 caractères</span>
        </div>
        
        <div>
        <label class="form_row" for="mdp2">Mot de passe (confirmation) </label>
        <input name="pwd2" id="pwd2" type="password" />
        <span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine</span>
        </div>
       
 
        <div>
        <label class="form_row" for="lastname">Nom :</label>
        <input name="lastName" id="lastName" type="text" />
        <span class="tooltip">Un nom ne peut pas faire moins de 2 caractères</span>
        </div>

        <div>
        <label class="form_row" for="firstName">Prénom :</label>
        <input name="firstName" id="firstName" type="text" />
        <span class="tooltip">Un prénom ne peut pas faire moins de 2 caractères</span>
        </div>

        <div>
        <label class="photo"> </label>
        </div>

        <div>
        <label class="form_row" for="dateNaissance">Date de naissance</label>
        <input name="dateNaissance" id="dateNaissance" type="date" />
        <span class="tooltip">L'âge doit être compris entre 5 et 140</span>
        </div>

        <div>
        <label class="form_row" for="villeNaissance">Ville de naissance </label>
        <input name="villeNaissance" id="villeNaissance" type="text"/>
        <span class="tooltip">Votre ville?</span>
        </div>

        <div>
        <span class="form_col-md-3">Sexe :</span>
        <label><input name="sex" type="radio" value="H" />Homme</label><br /><br />
        <label><input name="sex" type="radio" value="F" />Femme</label><br /><br />
        <label><input name="sex" type="radio" value="I" />Je ne souhaite pas le préciser</label>
        <span class="tooltip">Vous devez sélectionnez votre sexe</span>
        </div>

        <div>
        <label class="form_row" for="email">Adresse E-mail</label>
        <input name="email" id="mail" type="email" />
        <span class="tooltip">Vous devez saisir un Email valide</span>
        </div>

        <div>
        <label class="form_row" for="phone">Numéro de téléphone</label>
        <input name="phone" id="phone" type="tel" />
        <span class="tooltip">Vous devez saisir un numéro valide</span>
        </div>

        <div>
        <label class="form-col" for="adresse">Adresse postale</label>
        <input name="adresse" id="adresse" type="text" />
        <span class="tooltip">Vous devez saisir une adresse valide</span>
        </div>

        <div>
        <label class="form-col" for="CP">Code postal</label>
        <input name="CP" id="CP" type="text" />
        <span class="tooltip">Vous devez saisir un code postal</span>
        </div>

        <div>
        <label class="form-col" for="ville">Ville</label>
        <input name="city" id="city" type="text" />
        <span class="tooltip">Vous devez saisir une ville</span>
        </div>

        <div>
        <label class="form-col" for="region">Région</label>
        <input name="region" id="region" type="text" />
        <span class="tooltip">Vous devez saisir votre région de résidence</span>
        </div>

        <div>
        <label class="form-row" for="pays">Pays</label>
        <input name="pays" id="pays" type="text" />
        <span class="tooltip">Vous devez saisir votre pays de résidence</span>
        </div>

        <div>
        <label class="form-col" for="presence">Jour(s) de présence</label>
        <select
        
        <span class="tooltip">Vous devez sélectionner votre jour de présence:</span>
        </div>
        
        <div>
        <span class="form_col"></span>
        <label><input name="news" type="checkbox" /> Je désire recevoir la newsletter chaque mois.</label>
        </div>

        <div>
        <span class="form_col"></span>
        <input type="submit" value="M'inscrire" /> <input type="reset" value="Réinitialiser le formulaire" />
        </div>

    </form>
        <p><span>*Required</span> </p>
        </div>

</html>
<?php

$content = ob_get_clean();
require 'views/template.php';
?>

