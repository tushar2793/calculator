<?php

class Calculator {
    	
	function multiply($argv) {
	    $args = $argv[2];
        $params = explode(',', $args);
        $result = 1;
        for ($i = 0; $i < count($params); $i++) {
			if(!is_numeric($params[$i])) {
				throw new Exception("Value must be numbers only");
			}
            $result = $result * $params[$i];
        }
        return $result;
    }
}

$obj = new Calculator;
try {
	$result = $obj->multiply($argv);
	echo $result;
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

?>