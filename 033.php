<?php
function calcularCustoTotal($precoUnitario, $quantidade) {
    return $precoUnitario * $quantidade;
}

$precounitario = 11.50;
$quantidade = 6;

$custototal = calcularCustoTotal($precounitario, $quantidade); // ✅ Correção aqui
echo "Custo total: R$ " . number_format($custototal, 2, ',', '.');
?>
