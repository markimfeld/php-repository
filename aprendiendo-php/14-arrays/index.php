<?php


$peliculas = array('Batman','Spiderman','Flash');

echo '<ul>';
for($i = 0; $i < 3; $i++){
    echo $peliculas[$i];
}
echo '</ul>';

echo 'hello world';

echo '<ul>';
foreach ($peliculas as $pelicula) {
    echo '<li>' . $pelicula . '</li>';
}
echo '</ul>';


$contactos = array(
    array(
        'nombre' => 'marcos',
        'email' => 'seba@gamilcsdf'
    ),
    
    array(
        'nombre' => 'fede',
        'email' => 'asdfdsf'
    ),
    
    array(
        'nombre' => 'angel',
        'email' => 'seba@gwerweramilcsdf'
    )
);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

?>
