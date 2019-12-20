<?php

$title = 'Accueil Meeting Aérien';
//ob_start();

?><!--
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>accueil</title>
        <link rel="stylesheet" href="feuilleAccueil.css">
	</head>
	<body>-
    <link rel="stylesheet" href="views/components/feuille.css">
		<section id="menu">	
			<div class="wrapper"> 
				<article>
					<div class="overlay"> 
						<h4> MEETING AERIEN 2020</h4>
							<h3>LES 26 ET 27 SEPTEMBRE 2020</h3> <br>
								<a href="http://www.meeting.desetoilesetdesailes.com/" class="button1"> Voir le site</a></div>	
										<img src="images/avionrose.jpg">
				</article>	
				<article style="background-image:url(../../images/main.jpg);">
					<div class="overlay"> 
						<h4> EDITION 2018</h4>
							<h3> LES 29 ET 30 SEPTEMBRE 2018</h3>
								<a href="http://2018.meeting.desetoilesetdesailes.com/" class="button2"> Voir le site</a></div> 	
									<img src="images/imageMeeting2018.jpg">
									
				</article>
			<div  class="clear"></div>
			</div>-->
			<link rel="stylesheet" href="views/components/feuilles.css">
			<section id="presentassos">	
			<div class="wrapper"> 
				<article  id= "article1">
					<div class="overlay"> 
					<h4> MEETING AERIEN 2020: <br> 26 ET 27 SEPTEMBRE 2020</h4>
					<img src="images/imageMeeting.jpg" alt="meeting aérien"> <br>
					<a href="http://www.meeting.desetoilesetdesailes.com/" class="button1"> Voir le site</a>
					</div>
				</article>
				
				<article  id= "article2">
				<div class="overlay"> 
					<h4> EDITION 2018: <br>LES 29 ET 30 SEPTEMBRE 2018</h4>
						<img src="images/imageMeeting.jpg" alt="meeting aérien"> <br>
				<a href="http://2018.meeting.desetoilesetdesailes.com/" class="button2"> Voir le site</a>
				</div>
				</article>
				<div  class="clear"></div>
			
		</section>





















<!--


		</section>
		<section id="presentassos">	
			<div class="large-8 large-offset-2 columns">
					 <h2> L'ASSOCIATION  </h2>
							 	<div class="presentation">
                   					<p>Créée en 2010, l’Association des Étoiles et des Ailes est née de la volonté de diffuser une culture artistique <br> et scientifique en lien avec l’aéronautique et le spatial et ce au travers de deux événements majeurs une<br> année sur l'autre : le festival aérospatial et le meeting aérien.</p>
                    				<p>  Le festival Aérospatial  réunit petits et grands, amateurs, néophytes et passionnés autour d’animations, de <br> projections de films, de conférences et d’un salon du livre et de la bande-dessinée.</p>
                   					<p>
                      				<b>Les 5 et 6 octobre 2019, a eu lieu la 8e édition du Festival aérospatial Des Etoiles et des Ailes à la Cité de l'espace .<b>
                    				</p>
                  					<p><strong>La 4e édition du meeting aérien aura lieu les  26 et 27 septembre 2020.</strong>
									<p> <span id="bchance">Bonne visite !</span ></p>
								</div>
			</div>
		</section>
    </body>
</html>-->
<?php 
$content = ob_get_clean();
require 'views/template.php';
 ?>











