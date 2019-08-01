<?php

class Calculator {
    	
	function add() {
        $args = $_SERVER['argv'][2];
        $params = explode(',', $args);
        foreach($params as $value) {
            if($value < 0) {
                return "Negative numbers not allowed.";
            }
        }
    }
}

$obj = new Calculator;
$result = $obj->add();
echo $result;

?>