<?php
	include("exo6.php");
	$test = array(
				array("data" => array("nom" => "Dupond","prenom" => "Jean","CP" => 4020,"naissance" => "06/03/1979","banque" => "BE40 1235 2255 8889"),
					  "response" => array("result" => TRUE, "champ" => array("nom" => TRUE,"prenom" => TRUE,"CP" => TRUE,"naissance" => TRUE,"banque" => TRUE))
					  ),
					array("data" => array("nom" => "Dupond","prenom" => "Jean","CP" => 4020,"naissance" => "32/03/1979","banque" => "BE40 1235 2255 8889"),
					  "response" => array("result" => TRUE, "champ" => array("nom" => TRUE,"prenom" => TRUE,"CP" => TRUE,"naissance" => FALSE,"banque" => TRUE))
					  ),					
					array("data" => array("nom" => "Dupond5","prenom" => "Jean$","CP" => 999,"naissance" => "30/03/1979","banque" => "BE40 ABCS 2255 8889"),
					  "response" => array("result" => TRUE, "champ" => array("nom" => FALSE,"prenom" => FALSE,"CP" => FALSE,"naissance" => FALSE,"banque" => FALSE))
					  )
			);

	$ret=true;
	$i=1;
	foreach($test as $var) {
		extract($var);

		$result = check_form($data);
		if ($response['result']==$result['valide']) {
			foreach($response['champ'] as $champ => $valeur) {
				if (!isset($result[$champ]['valide'])) {
					echo("TECHIO> message --channel Oops! Données ($i): Information manquante pour $champ \r\n");		
					$ret= $ret & FALSE;
				}
				else {
					if ($result[$champ]['valide']!=$valeur) {
						echo("TECHIO> message --channel Oops! Données ($i): Information mal vérifiée pour $champ \r\n");		
						$ret= $ret & FALSE;						
					}
					else 
						$ret= $ret & TRUE;
				}
			}
		}
		else {
			$ret= $ret & FALSE;
			echo("TECHIO> message --channel Oops! Les données ($i) devrait être considéré comme ".(($response['result']) ? "valide" : "invalide")." \r\n");
		}
		$i++;
	}
	
	if ($ret) {		
		echo("TECHIO> success true \r\n");
		echo("TECHIO> message --channel Super! Belle solution. \r\n");
	}
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");		
	}
	
	
	
?>