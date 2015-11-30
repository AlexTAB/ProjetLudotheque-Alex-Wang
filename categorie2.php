
<?php
  include 'hautPage.php'; // inclusion fichier mise en forme haut de page

  // récupération des données saisies
  if (empty(($_POST))){
    // cas de premiers passages sur la page sans recherche
    $nomJeu='%';
    $ageR='%';
    $Dispo='%';
  }
  else{
    $nomJeu=$_POST["nomJeu"];
    $ageR=$_POST["ageR"];
    $Dispo=$_POST["Dispo"];
  }
  // conditions si champs vides ou avec « Tous »

  if((empty($nomJeu)) || ($nomJeu='Tous')) {
    $nomJeu ='%';

  }
  if((empty($ageR)) OR ($ageR =='Tous')) {
    $ageR ='%';

  }
  if((empty($Dispo)) OR ($Dispo='Tous')) {
    $Dispo ='%';

  }
 
	//paramètres de connexion à la base de données;
  include 'connexionServeur.php';
  $LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
  mysql_query("SET NAMES UTF8");
  $retour=mysql_select_db($Base,$LienBase);
  //formulaire de recherche
  echo "<form method = 'post' action='categorie2.php'>";
    echo "Nom du jeu  <input type=\"text\" name = \"nomJeu\" /><br /><br />";
    echo "<label for=\"ageR\"> A Partir de quel age ?</label><br />";
    echo "<select name=\"ageR\">";
      echo "<option value=\"Tous\">Tous</option>";
      echo "<option value=\"3+\">3+</option>";
      echo "<option value=\"5+\">5+</option>";
      echo "<option value=\"6+\">6+</option>";
      echo "<option value=\"10+\">10+</option>";
      echo "<option value=\"16+\">3+</option>";
      echo "<option value=\"18+\">5+</option>";
    echo "</select>";
    echo "<br>";

    echo "<label for=\"ageR\"> Jeu disponible ?</label><br />";
    echo "<select name=\"Dispo\">";
      echo "<option value=\"Tous\">Tous</option>";
      echo "<option value=\"oui\">oui</option>";
      echo "<option value=\"non\">non</option>";
    echo "</select>";
    echo "<br>";

    echo "<input type=\"submit\" value=\"Valider\" name = \"validerR\" />";
  echo "</form>";
  
	//Ecriture de la requête en SQL (voir TP)
  
	$Requete="SELECT * FROM FC_grp5_Jeux WHERE `Nom` LIKE '".$nomJeu."' AND `Ages` LIKE '".$ageR."' AND `disponible` LIKE '".$Dispo."';";
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
    	echo"<td>".$donnees[1]."</td>"; // Nom
    	echo "<td>".$donnees[2]."</td>"; // Age
    	echo "<td>".$donnees[3]."</td>"; // Typejeux
      echo "<td>".$donnees[3]."</td>"; // Disponible
      // Disponible $donnees[4]
    	if ($donnees[4] =='oui'){
    	   echo"<td>";
    	   echo "<input type='checkbox' name='reserver[]' value=\"$donnees[1]\" checked= \"checked\"/>";
    	   echo "</td>";
    		 
    	}        
    	echo"</tr>";
   
  	}
  	echo "</table>";
    echo"<br /> <br/>";
    echo "votre prenom et nom:<input type=\"text\" name = \"NomClient\" /><br /><br />";
    echo "<label for=\"Creneau\">Quel créneau horaire choissisez-vous ?</label><br />";
    echo "<select name=\"Creneau\">";
      echo "<option value=\"9-13\">9h-13h</option>";
      echo "<option value=\"14-19\">14h-19h</option>";
    echo "</select>";

  	echo "<input type=\"submit\" value=\"Valider\" name = \"valider\" />";
  	echo "</form>";
	mysql_close();
    include 'piedPage.php'; // forme du footer

?>

