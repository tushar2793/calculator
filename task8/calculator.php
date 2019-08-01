<?php

class Calculator {
    	
	function multiply() {
	    $args = $_SERVER['argv'][2];
        $params = explode(',', $args);
        $result = 1;
        for ($i = 0; $i < count($params); $i++) {
            $result = $result * $params[$i];
        }
        return $result;
    }
}

$obj = new Calculator;
$result = $obj->multiply();
echo $result;

?>