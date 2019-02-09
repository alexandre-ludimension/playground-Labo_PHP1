<?php
    include 'exo1.php';
	
	$_d=array(0,1,4,9,16,25);
	
	if ($a === "42" && $b === 42 && $c === "Hello World!" && $d === $_d) {
		echo("TECHIO> success true \r\n");
		$contents = file_get_contents("exo1.php");
		if (preg_match("#(for|while)#",$contents))
			echo("TECHIO> message --channel Super! Une solution facilement adaptable. \r\n");
		else if (preg_match("#array\(.+\)#",$contents))
			echo("TECHIO> message --channel C'est déjà pas mal. Mais cette solution serait-il pratique si le vecteur était beaucoup plus grand. \r\n");
		else
			echo("TECHIO> message --channel La solution répond à la question mais il y a moyen de faire mieux.\r\n");
	} 
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again ðŸž \r\n");
	}

?>