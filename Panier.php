<?php    
	include 'hautPage.php'; // inclusion fichier mise en forme haut de page

//paramètres de connexion à la base de données;
  include 'connexionServeur.php';
  $LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
  mysql_query("SET NAMES UTF8");
  $retour=mysql_select_db($Base,$LienBase);

  //récupération des données du formulaire précédent

	$Client=$_POST["NomClient"];
    $Creneau=$_POST["Creneau"];

	$jeux = array();
	foreach($_POST["reserver"] as $v){
		$jeux[] = $v;
				
	}
	$liste = implode(", ",$jeux);
	$nbjeux = count($jeux);
	if($nbjeux < 4) {
		echo "<br><p>panier valide </p><br>";
		//	INSERT INTO... Ajouter à la bdd VALUES('$liste')
		$Requete = "INSERT INTO  fc_grp5_paniers (Jeux, Client, Creneau) VALUES ('".$liste."','".$Client."','".$Creneau."')";
		//INSERT INTO `info201a`.`fc_grp5_paniers` (`id_client`, `Jeux`, `Client`, `Creneau`) VALUES (NULL, 'Monopoly , territory', 'Al2', '9-13');
		  	//Envoi de la requête
  		$reponse = mysql_query($Requete);
  	// traitement
		if($reponse){
			echo "<br><p>transmission de la réservation réalisée avec succès</p><br>";
			$panierValide = 1;
        }

        	mysql_close();
	}
	else {
		echo "<br><p>3 jeux maximum en emprunt Veuillez refaire votre choix de location en tenant compte de cette indication, merci</p><br>";
		$panierValide = 0;
	}
	/* Pour limiter le nombres de jeux à 3 il faut faire un 

		$select =SELECT Jeux FROM FC_grp5_paniers WHERE Client =...

		
		$jeux = array();
		$jeux = explode(", ", $select);
		$nbjeux = count($jeux);
		if(nbjeux < 3)
			INSERT INTO... Ajouter à la bdd VALUES('$liste')
		else
			echo "3 jeux seulement"


	*/
	//Ecriture de la requête de recapitulation
	//si la réservation est correcte
	if($panierValide){
	
	  	echo "<br><p>récapitulatif de votre location</p><br>";
		$Requete2= "SELECT * FROM FC_grp5_paniers;";
  		//Envoi de la requête
  		$Reponse2 = mysql_query($Requete2);
  		// traitement
  		echo "<table border=1>";
			echo "<th>Jeux</th><th>Client</th><th>Creneau Horaire</th>";

  			//Traitement ligne par ligne de la réponse
  			while ($donnees2 = mysql_fetch_array($Reponse2) ) {	
  		
    			//Affichage des lignes de données, champ par champ
    			echo "<tr>";
    			echo"<td>".$donnees2[1]."</td>"; // Liste Jeux
    			echo "<td>".$donnees2[2]."</td>"; // Nom Client
    			echo "<td>".$donnees2[3]."</td>"; // Creneau Horaire
    			echo"</tr>";
   
  			}
  		echo "</table>";
   		echo"<br /> <br/>";
    		mysql_close();
    }

	include 'piedPage.php'; // forme du footer
?>

