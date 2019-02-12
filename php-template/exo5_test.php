<?php

	$test = array(
				array("cle" => 16,"tableau" => array(1,2,3,4,5)),
				array("cle" => 4,"tableau" => array(1,2,3,4,5)),
				array("cle" => "trois","tableau" => array("un" => 1, "deux" => 2, "trois" => 3, "quatre" => 4, "cinq" => 5)),
				array("cle" => "trois","tableau" => array(1 => 1, "deux" => 2, 3 => 3, "quatre" => 4, 5 => 5)),
			);

	$ret=true;
	foreach($test as $var) {
		extract($var);
		include("exo5.php");
		if ($res==array_key_exists($cle,$tableau))
			$ret= $ret & TRUE;
		else 
			$ret= $ret & FALSE;
	}
	
	if ($ret) {		
		echo("TECHIO> success true \r\n");

		$contents = file_get_contents("exo5.php");
		
		if (preg_match("#array_key_exists#",$contents))
			echo("TECHIO> message --channel Super! Belle solution. \r\n");
		else
			echo("TECHIO> message --channel Bien La solution répond à la question mais pense que des fonctions existante solutionnent déjà beaucoup de problème.\r\n");		
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}
	
	
	
?>