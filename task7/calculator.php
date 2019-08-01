<?php

class Calculator {
    	
	function sum() {
        $args = $_SERVER['argv'][2];
        $params = explode(',', $args);
        foreach($params as $key => $value) {
            if($value > 1000) {
		        unset($params[$key]);
            }
        }
        $result = array_sum($params);
        return $result;
    }
}

$obj = new Calculator;
$result = $obj->sum();
echo $result;

?>