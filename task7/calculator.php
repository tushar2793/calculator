<?php

class Calculator {
    	
	function add($argv) {
		$result = 0;
        $args = $argv[2];
        $params = explode(',', $args);
        foreach($params as $key => $value) {
			if(!is_numeric($value)) {
				throw new Exception("Value must be numbers only");
			}
            if($value > 1000) {
		        continue;
            }
			$result += $value;
        }
        $result = array_sum($params);
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