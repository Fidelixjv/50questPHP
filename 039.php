<?php
$comprimento = 23;
$largura = 10;
function area($comprimento, $largura) {
    return $comprimento * $largura;
}

$AreaRetangulo = area($comprimento, $largura);

echo  "Area do terreno é: " . $AreaRetangulo . " metros quadrados";