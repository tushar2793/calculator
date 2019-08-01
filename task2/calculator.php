<?php

class Calculator {
    	
	function sum($argv) {		
        if (array_key_exists('2', $argv)) {
			$result = 0;
            $args = $argv[2];
            $params = explode(',', $args);
            foreach($params as $par) {
			    if(!is_numeric($par)) {
                    throw new Exception("Value must be numbers only");
			    }
				$result += $par;
			}
        } else {
            $result = 0;
        }
        echo $result;
    }
}

$obj = new Calculator;
try {
	$result = $obj->add($argv);
	echo $result;
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

?>