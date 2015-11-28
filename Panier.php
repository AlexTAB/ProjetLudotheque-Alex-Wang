<?php 
	var_dump($_POST);

	$jeux = array();
	foreach($_POST["reserver"] as $v){
		$jeux[] = $v;
	}
	$liste = implode(", ",$jeux);
	/* Pour limiter le nombres de jeux à 3 il faut faire un 

		SELECT Jeux FROM FC_grp5_paniers WHERE Client =...

		
		$jeux = array();
		$jeux = explode(", ", $select);
		$nbjeux = count($jeux);
		if(nbjeux < 3)
			INSERT INTO... Ajouter à la bdd VALUES('$liste')
		else
			echo "3 jeux seulement"


	*/
?>