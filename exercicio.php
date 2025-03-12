<?php

$multiplicador = 5;
$resultado = 0;

for ($i=0; $i < 11; $i++) { 
    $resultado = $multiplicador*$i;
    echo "$i x $multiplicador = $resultado<br>";
}
