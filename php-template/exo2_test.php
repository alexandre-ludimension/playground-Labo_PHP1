<?php
	$tab = array("cle" => 7, 2 => "Hello", "trois" => "Coucou", 1 => 8);
	
	ob_start();
	include("exo2.php");
	$test_string = ob_get_contents();
	ob_end_clean();
	
	ob_start();	
	foreach($tab as $key => $value)
		echo "$key:$value\n";
	$valid_string = ob_get_contents();
	ob_end_clean();
	
	if ($test_string == $valid_string) {
		echo("TECHIO> success true \r\n");
		$contents = file_get_contents("exo2.php");
		
		if (preg_match('#foreach ?\(.+as.+=>.+\)#',$contents))
			echo("TECHIO> message --channel Super! Une belle solution. \r\n");
		else
			echo("TECHIO> message --channel OK La solution répond à la question mais pense à la boucle foreach.\r\n");		
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}
	
?>