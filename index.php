<?php
session_start();

require_once 'controller/frontend.php';


if(isset($_GET['contact'])){
    displaypage();
}else if(isset($_GET['inscrire'])){
    displayinscrire();
}else if(isset($_GET['connexion'])){
    displayconnexion();
}else
{
    displayMenu();
}

if (isset($_GET['menu'])){
    displayMenu(); 
}