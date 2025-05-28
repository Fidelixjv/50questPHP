<?php
$entradas = [5, 12, 7, 3, 0, 8];
$index = 0;

do {
    $valor = $entradas[$index];
    echo "Valor recebido: $valor\n";
    $index++;
} while ($valor != 0);
