<?php

$title = 'Contactez-nous';
ob_start();
?>

<div class="container">
    <div class="heading">
        <h2>Formulaire de contact</h2>
    </div>
        <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form id="contact-form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <label id="prenom1" for="prenom">Prénom<span class="blue"> *</span></label>
                        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
                        <p class="comments">Message d'erreur</p>
                    </div>
                     <div class="col-md-12">
                        <label id="nom1" for="nom">Nom<span class="blue"> *</span></label>
                        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-md-12">
                        <label id="email1" for="email">Email<span class="blue"> *</span></label>
                        <input type="text" name="email" class="form-control" placeholder="Votre Email">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-md-8 ">
                        <label for="message">Message<span class="blue"> *</span></label>
                        <textarea class="form-control" id ="message" name="message" placeholder="Votre message" class="cols= 20" rows="10"></textarea>
                        <p class="comments">Message d'erreur</p>
                    </div> 
                        <div class="col-md-6">
                       <button type="submit" class="button1" >Envoyer</button>
                    </div>
                    <div class="col-md-12">
                         <p class="blue"><strong>* Ces informations sont requises</strong</p>
                    </div>
                </div>
                <div class="merci">
                    <p>Votre demande est bien prise en compte</p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require 'views/template.php';