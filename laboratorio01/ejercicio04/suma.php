<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo "Suma: ".sumar($num1, $num2);


function sumar($num1, $num2) {
    return ($num1+$num2);
}
?>