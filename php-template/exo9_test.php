<?php
	include("exo9.php");
	$test = array(0,1,5,500,1000);
			
	$ret=true;
	foreach($test as $var) {		
		if (_premiers($var)===premiers($var))
			$ret= $ret & TRUE;
		else 
			$ret= $ret & FALSE;
	}
	
	if ($ret) {		
		echo("TECHIO> success true \r\n");
		echo("TECHIO> message --channel Super! Belle solution. \r\n");
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}

	function _premiers($nb) {
		$nb_premier = array();
		
		$i=1;
		while (count($nb_premier)<$nb) {
			if (_is_prime($i,$nb_premier)) $nb_premier[]=$i;
			$i++;
		}
		return $nb_premier;
	}

	function _is_prime($nb,$primes_under) {
		if ($nb==1) return false;
		else {
			$i=0;
			while(isset($primes_under[$i]) && $primes_under[$i]<=sqrt($nb) && $nb%$primes_under[$i]!=0) $i++;
			if (!isset($primes_under[$i]) || $nb%$primes_under[$i]!=0) return true;
			else return false;
		}
		
	}
?>