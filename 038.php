<?php
$valor = 1234.56;

function ValorMonetario($valor) {
    echo $valor = "R$ " . number_format($valor, 2,',', '.');
}

echo ValorMonetario($valor);