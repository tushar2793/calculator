<?php

class Calculator {
    	
	function add() {
        $args = $_SERVER['argv'][2];
        $expected_args = str_replace('\n', ',', $args);
        $params = explode(',', $expected_args);
        $result = array_sum($params);
        return $result;
    }
}

$obj = new Calculator;
$result = $obj->add();
echo $result;

?>