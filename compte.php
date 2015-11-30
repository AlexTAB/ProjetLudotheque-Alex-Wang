<?php
	include 'hautPage.php'; // inclusion fichier mise en forme haut de page

	if(isset($_POST["valider"])) 
	{
		$nom=$_POST["nom"];
		$mail=$_POST["mail"];
		$login=$_POST["login"];
		$pwd=$_POST["pwd"];
		$veri_pwd=$_POST["veri_pwd"];
		if((!empty($login)) && (!empty($pwd)) && (!empty($veri_pwd)) && (!empty($mail)))
		{
			if($pwd==$veri_pwd)
			{
					  include 'connexionServeur.php';
                	$LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
                	$retour=mysql_select_db($Base,$LienBase);
					$sql = "INSERT INTO FC_grp5_Users(Login, Pwd, Mail) VALUES('".$login."','".$pwd."','".$mail."')";
					$reponse= mysql_query($sql);
					if($reponse){
						echo "bravo";
                	}
                	mysql_close();

        	}
       		else {
       			echo "<p>";
       				echo" Vérification de cohérence entre votre saisie de mot de passe et sa confirmation a echoué.";
   					echo "<br> veuillez remplir de nouveau formulaire d'inscription";
   				echo" </p>";
   			}         
		}
		else {
			echo "<p>";
				echo " Un champ obligatoire soit login, soi mail, soit mot de passe ou soit vérification de mots de passe, n'est pas rempli.";
   				echo "<br> veuillez remplir de nouveau formulaire d'inscription"; 
   			echo "</p>";
		} 
	}
		include 'piedPage.php'; // forme du footer

?>
