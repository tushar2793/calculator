<?php

class Calculator {
    	
	function add() {   
	    $args = $_SERVER['argv'][2];
        $params = explode(',', $args);
        $result = array_filter($params, function($input) {
            return $input < 0;
        });
        $result = implode(",", $result);
        echo "Negative numbers (".$result.") not allowed.";
    }
}

$obj = new Calculator;
$result = $obj->add();
echo $result;

?>