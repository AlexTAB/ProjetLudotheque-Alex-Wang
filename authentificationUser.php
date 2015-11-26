<head>
		<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style1ELudotheque.css" media="screen" />
		
		<title> Catalogue E-ludothèque </title>
	</head>
<?php
		//if(!empty($_POST["login"])&&!empty($_POST["password"])) {

			//paramètres de connexion à la base de données $Base="nom-base";
			$Serveur= "info.univ-lemans.fr";
			$Utilisateur="info201a_user";
			$MotDePasse="com72";
			$Base = "info201a";
			//connexion au serveur où se trouve la base de données;
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
		//}
		//else {
		//	echo "Toutes les cases du formulaire ne sont pas remplies";
		//}
?>
