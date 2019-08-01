<?php

class Calculator {
    	
	function sum() {
        if (array_key_exists('2', $_SERVER['argv'])) {
            $args = $_SERVER['argv'][2];
            $params = explode(',', $args);
            $result = array_sum($params);
        } else {
            $result = 0;
        }
        echo $result;
    }
}

$obj = new Calculator;
$result = $obj->sum();
echo $result;
?>