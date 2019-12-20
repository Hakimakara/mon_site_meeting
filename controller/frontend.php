<?php

function displayMenu(){
    require 'views/components/menu.php';
    // require '..\views/backend/menu.php';
}

function displaypage(){
    switch ($_GET['contact']){
        case 'contactez-nous':
            require 'views/frontend/contactez-nous.php';
            break;
        default:
            require 'views/components/frontend/menu.php';
    }
}

function displayinscrire(){
    switch($_GET['inscrire']){
        case 'inscrire':
            require "views/frontend/inscrire.php";
            break;
        default:
            require 'views/components/frontend/menu.php';
    }
}
function displayconnexion(){
    switch($_GET['connexion']){
        case 'connexion':
            require "views/frontend/se_connecter.php";
            break;
        default:
            require 'views/components/frontend/menu.php';
    }
}

