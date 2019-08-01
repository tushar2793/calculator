<?php

class Calculator {
    	
	function add($argv) {
        $args = $argv[2];
        $params = explode(',', $args);
		$number = 0; 
        foreach($params as $value) {
			if(!is_numeric($value)) {
                throw new Exception("Value must be numbers only");
			}
            if($value < 0) {
                return "Negative numbers not allowed.";
            } else {
			    $number += $value;
			}
        }
		return $number;
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