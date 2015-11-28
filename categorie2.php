<head>
		
		<link rel="stylesheet" type="text/css" href="style1ELudotheque.css" media="screen" />
		<meta charset="utf8">
		<title> Présentation Eludothèque </title>
	</head>
	<body>
		<!-- Volet de navigation du site--> 
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
    include 'connexionServeur.php';
    $LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
    mysql_query("SET NAMES UTF8");
    $retour=mysql_select_db($Base,$LienBase);
	//Ecriture de la requête en SQL (voir TP)
	$Requete="SELECT * FROM FC_grp5_Jeux;";
  	//Envoi de la requête
  	$Reponse = mysql_query($Requete);
  	// traitement
  	echo "<form method = 'post' action='Panier.php'>";
  	echo "<table border=1>";
	echo "<th>Nom</th><th>Ages</th><th>Type de Jeux</th><th>Disponible</th>";

  	//Traitement ligne par ligne de la réponse
  	while ($donnees = mysql_fetch_array($Reponse) )
  	{	
  		
    	//Affichage des lignes de données, champ par champ
    	echo "<tr>";
    	echo"<td>".$donnees[0]."</td>"; // Nom
    	echo "<td>".$donnees[1]."</td>"; // Age
    	echo "<td>".$donnees[4]."</td>"; // Typejeux
      // Disponible $donnees[3]
    	if ($donnees[3] =='oui'){
    	   echo"<td>";
    	   echo "<input type='checkbox' name='reserver[]' value=\"$donnees[0]\" checked= \"checked\"/>";
    	   echo "</td>";
    		 
    	}        
    	echo"</tr>";
   
  	}
  	echo "</table>";
  	echo "<input type=\"submit\" value=\"Valider\" name = \"valider\" />";
  	echo "</form>";
	mysql_close();
?>

