<!DOCTYPE html>
<html lang="fr">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?= $title;?></title>
        <link rel="stylesheet" href="views/components/feuille.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <meta name="description" content="Créée en 2010, l’Association des Étoiles et des Ailes est née de la volonté de diffuser une culture artistique et scientifique en lien avec l’aéronautique et le spatial.">
        <link href="http://fr.allfont.net/allfont.css?fonts=edo" rel="stylesheet" type="text/css" />
    </head>
<body>
    <?php
        //Ajoute le header
        require 'views/components/header.php';
        //Ajoute le contenu de la page
        echo $content;
        //Ajoute le footer
        require 'views/components/footer.php';
    ?>
</body>
</html>