<?php

declare(strict_types = 1);
include 'autoloader.inc.php';

$operator = $_POST['operator'];
$operand1 = $_POST['operand1'];
$operand2 = $_POST['operand2'];

$calc = new Calculation($operator, (int)$operand1, (int)$operand2);

try{
    echo $calc->calculate();

} catch(TypeError $e){
    echo "Error: " . $e->getMessage();
}
?>