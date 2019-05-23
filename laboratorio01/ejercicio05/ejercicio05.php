<?php


$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];

if(isset($_REQUEST['sumar'])){
    echo '<div class="resultado"><h1>Resultado: '.sumar($n1, $n2).'</h1></div>';
} else if(isset($_REQUEST['restar'])) {
    echo restar($n1, $n2);
} else if(isset($_REQUEST['multiplicar'])) {
    echo multiplicar($n1, $n2);
} else if(isset($_REQUEST['dividir'])) {
    echo dividir($n1, $n2);
} else {
    echo 'Elejí una opción correcta!';
}


function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

function restar($numero1, $numero2) {
    return $numero1 - $numero2;
}

function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

function dividir($numero1, $numero2) {
    if($numero2 != 0) {
        return $numero1 / $numero2;
    } else {
        return 'Division sobre zero no permito';
    }
}

?>

