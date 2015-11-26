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

	$Serveur= "info.univ-lemans.fr";
	$Utilisateur="info201a_user";
	$MotDePasse="com72";

	$Base = "info201a";

	$LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
	$retour=mysql_select_db($Base,$LienBase);
	//Ecriture de la requête en SQL (voir TP)

	$Requete="SELECT * FROM FC_grp5_Jeux;";

	//Envoi de la requête
	$Reponse = mysql_query($Requete);
	// traitement
  	echo "<table border=1>";


	//Traitement ligne par ligne de la réponse

	while ($donnees = mysql_fetch_array($Reponse) )
 {

		//Affichage des lignes de données, champ par champ

		echo "Nom du jeux: ".$donnees[0]." Age requis: " .$donnees[1]."  " .$donnees[2]."<br></br>";

	}

	mysql_close();

?>

