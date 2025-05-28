<?php
$valor = 123456;

function ValorMonetario($valor) {
    echo $valor = "R$ " . number_format($valor, 2,',', '.');
}

echo ValorMonetario($valor);