<?php
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
                $Serveur= "info.univ-lemans.fr";
                $Utilisateur="info201a_user";
                $MotDePasse="com72";
                $Base = "info201a";
                $LienBase= mysql_connect($Serveur,$Utilisateur,$MotDePasse);
                $retour=mysql_select_db($Base,$LienBase);
				$sql = "INSERT INTO FC_grp5_Users(Login, Pwd, Mail) VALUES('".$login."','".$pwd."','".$mail."')";
				$reponse= mysql_query($sql);
				if($reponse){
					echo "bravo";
                }
                mysql_close();

        }
       else
       echo "Vérification de votre mot de passe echoue";         
	} 
}
?>
