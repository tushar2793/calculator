<?php

class Calculator {
    	
	function add($argv) { 
        $result = 0;	
	    $args = $argv[2];
        $params = explode(',', $args);
		foreach($params as $par) {
			if(!is_numeric($par)) {
				throw new Exception("Value must be numbers only");
			}
			$result += $par;
		}
        $message = array_filter($params, function($input) {
            return $input < 0;
        });
		if(count($message)>0) {
			$message = implode(",", $message);
            return "Negative numbers (".$message.") not allowed.";
		} 
		return $result;
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