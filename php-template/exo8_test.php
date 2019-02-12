<?php
	include("exo8.php");
	$test = array(
				array("m"=>10,"n"=>10,"min"=>-20,"max"=>20)
			);

	$ret=true;
	foreach($test as $var) {
		extract($var);
		
		$table=init_table($m,$n,$min,$max);
		if (count($table)==$m)
			for ($i=0;$i<$m;$i++) 
				if (count($table[$i])==$n)
					$ret= $ret & TRUE;
				else
					$ret= $ret & FALSE;
		else
			$ret= $ret & FALSE;
		
		if ($ret) {
			if (count_function_args("exo8.php","search_val")==1) {
				if (search_val($table)==_search_val($table)) {
					echo("TECHIO> success true \r\n");
					echo("TECHIO> message --channel Super! Belle solution. \r\n");
				}
				else {
					echo("TECHIO> success false  \r\n");
					echo("TECHIO> message --channel Oops! Try Again ðŸž (bad search_val)\r\n");		
				}				
			}
			else {
				echo("TECHIO> success false  \r\n");
				echo("TECHIO> message --channel Oops! Il y a moyen de n'utiliser q'un argument pour résoudre le problème\r\n");		
			}			
		}
		else {
			echo("TECHIO> success false  \r\n");
			echo("TECHIO> message --channel Oops! Try Again ðŸž (bad init_table)\r\n");		
		}
	}
	
	function _search_val($table) {
		$ret = array("nb_neg"=>0,"nb_pos"=>0,"nb_zero"=>0);
		for ($i=0;$i<count($table);$i++)
			for ($j=0;$j<count($table[$i]);$j++)
				if ($table[$i][$j]<0) 
					$ret['nb_neg']++;
				else if ($table[$i][$j]>0) 
					$ret['nb_pos']++;
				else
					$ret['nb_zero']++;
		return $ret;
	}
	
	function count_function_args($file,$function) {
		$contents = file_get_contents($file);
		preg_match_all("#function ".$function."\((.*)\)#",$contents,$arg);			
		return substr_count($arg[1][0],'$');		
	}
?>