<?php
    include 'exo1.php';
	
    function test($a) {
        if ($a === 42 && $b="azerty") {
            echo("TECHIO> success true \r\n");
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
	
    test($a);
?>