<?php
$quantidade = [1,2,3,4,5,6,7];
$indice = 0;

while ($indice < count($quantidade)) {
    echo "Quantidade: " . $quantidade[$indice] . "<br>";
    $indice++;
}
echo "Produção atingiu o limite ou ultrapassou 5: " . ($indice < count($quantidade) ? $quantidade[$indice] : "Fim dos dados") . "<br>";
