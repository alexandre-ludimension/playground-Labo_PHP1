<?php

	$test = array("",5,0,"salut",NULL);

	$ret=true;
	foreach($test as $key => $var) {
		include("exo3.php");
		if (($var==10 && empty($test[$key]) || $test[$key]==$var))
			$ret= $ret & TRUE;
		else 
			$ret= $ret & FALSE;
	}
	
	if ($ret) {		
		echo("TECHIO> success true \r\n");

		$contents = file_get_contents("exo3.php");
		
		if (preg_match("#= {0,1}\(.+\) {0,1}\?.*:.*;#",$contents))
			echo("TECHIO> message --channel Super! Belle solution. \r\n");
		else
			echo("TECHIO> message --channel Bien La solution répond à la question mais une alternative ternaire est encore mieux adaptée.\r\n");		
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}
	
	
	
?>