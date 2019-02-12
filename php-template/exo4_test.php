<?php

	$test = array(
				array("jour" => 16,"mois" => 3,"annee" => 1988),
				array("jour" => 30,"mois" => 2,"annee" => 1990),
				array("jour" => 32,"mois" => 13,"annee" => 2018),
				array("jour" => 29,"mois" => 2,"annee" => 2001),
				array("jour" => -1,"mois" => 2,"annee" => 2001)
			);

	$ret=true;
	foreach($test as $var) {
		extract($var);
		include("exo4.php");
		if ($res==checkdate($mois,$jour,$annee))
			$ret= $ret & TRUE;
		else 
			$ret= $ret & FALSE;
	}
	
	if ($ret) {		
		echo("TECHIO> success true \r\n");

		$contents = file_get_contents("exo4.php");
		
		if (preg_match("#checkdate#",$contents))
			echo("TECHIO> message --channel Super! Belle solution. \r\n");
		else
			echo("TECHIO> message --channel Bien La solution répond à la question mais pense que des fonctions existante solutionnent déjà beaucoup de problème.\r\n");		
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}
	
	
	
?>