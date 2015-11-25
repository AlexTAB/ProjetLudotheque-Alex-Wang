
<?php

        //paramètres de connexion à la base de données $Base="nom-base";
                $Serveur= "info.univ-lemans.fr";
                $Utilisateur="info201a_user";
                $MotDePasse="com72";
                $Base = "info201a";
                $LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
                $retour=mysql_select_db($Base,$LienBase);
				$sql = 'SELECT * FROM FC_grp5_Jeux';
				$reponse= mysql_query($sql);
				echo "<table border=1>";
				echo "<th>Nom</th><th>Ages</th><th>TypeJeux</th>";
				while($donnees = mysql_fetch_array($reponse))
                {
                	echo "<tr><td>".$donnees[0]."</td>";
                	echo "<td>".$donnees[1]."</td>";
                	echo "<td>".$donnees[2]."</td></tr>";
                }
                echo "</table>";
                mysql_close();
?>

