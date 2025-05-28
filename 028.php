<?php
$totalvendas = 0;
for ($i = 1; $i <= 100; $i++) {
    $valor = rand(5000, 50000);
    echo "dia $i: R$ " . number_format($valor, 2, ',', '.') . "<br>";
    $totalvendas += $valor;
}

