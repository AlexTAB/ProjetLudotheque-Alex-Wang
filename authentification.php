<head>

	<link rel="stylesheet" type="text/css" href="style1ELudotheque.css" media="screen" />

	<title> Présentation Eludothèque </title>
	
</head>
	
<body>
	
	<! Volet de navigation du site>
 
 	<ul class="volet">

		<th>

			<a href="./page2.html"> Présentation</a>

		</th>

		<th>

			<a href="./pageCatalogue.html">Le Catalogue</a>

		</th>

		<th>

			<a href="./pageInfosPratiques.html"> Informations Pratiques - Contact</a>

		</th>

		<th>

			<a href="./pageAccesPanierCompte.html"><img src="./ressourcesImage/panier_Eludo.jpg"></a>

		</th>

	</ul>
	
</body>
<?php

	//paramètres de connexion à la base de données $Base="nom-base";

	$Serveur= "127.0.0.1";

	$Utilisateur="root";

	$MotDePasse="";

	$Base = "essai_jeux";

	//connexion au serveur où se trouve la base de données

  	$LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
	//sélection de la base de données au niveau du serveur

	$retour=mysql_select_db($Base,$LienBase);

	//affichage d’un message d’erreur si la connexion a été refusée

	if(!$retour) {
   
		echo "\nConnexion a la base impossible";
	}

	else {

		echo "\n Connexion a la base reussie";

	}

?>
