<?php
	include 'hautPage.php'; // inclusion fichier mise en forme haut de page

	//paramètres de connexion à la base de données $Base="nom-base";
	include 'connexionServeur.php';

	$Serveur= "127.0.0.1";

	$Utilisateur="root";

	$MotDePasse="";

	$Base = "essai_jeux";

	//connexion au serveur où se trouve la base de données

  	$LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
	//sélection de la base de données au niveau du serveur

	$retour=mysql_select_db($Base,$LienBase);
			
	$sql = 'SELECT * FROM essai_Jeux';
				
	$reponse= mysql_query($sql);
				
	echo "<table border=1>";
				
	echo "<th>Nom</th><th>Ages</th><th>TypeJeux</th>";
				
	while($donnees = mysql_fetch_array($reponse))
                
	{
                	
		echo "<tr><td>".$donnees[1]."</td>";
                	
		echo "<td>".$donnees[2]."</td>";
                	
		echo "<td>".$donnees[3]."</td></tr>";
                
	}
                
	echo "</table>";
                
	mysql_close();
    include 'piedPage.php'; // forme du footer

?>

