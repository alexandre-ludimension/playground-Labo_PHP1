<?php
	include("exo7.php");
	$test = array(
				array("x1"=>5,"y1"=>7,"x2"=>12,"y2"=>7),
				array("x1"=>5,"y1"=>7,"x2"=>5,"y2"=>7),
				array("x1"=>5,"y1"=>17,"x2"=>5,"y2"=>7),
				array("x1"=>5,"y1"=>7,"x2"=>12,"y2"=>28)
			);

	$ret=true;
	foreach($test as $var) {
		extract($var);
		
		if (_distance($x1,$y1,$x2,$y2)==distance($x1,$y1,$x2,$y2))
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

	
	function _distance($x1,$y1,$x2,$y2) {
		return sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
	}		
?>