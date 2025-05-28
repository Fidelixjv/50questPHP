<?php
$entrada = [1,2,3,4,5,0];
$indice = 0;
$valor = null;

do {
    $Valor = $entrada[$indice];
    echo "Valor: $Valor<br>";
    $indice++;
} while ($valor != 0);