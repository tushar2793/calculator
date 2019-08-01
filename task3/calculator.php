<?php

class Calculator {
    	
	function add($argv) {
		$result = 0;
        $args = $argv[2];
        $expected_args = str_replace('\n', ',', $args);
        $params = explode(',', $expected_args);
        foreach($params as $par) {
			if(!is_numeric($par)) {
				throw new Exception("Value must be numbers only");
			}
			$result += $par;
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