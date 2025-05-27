<?php
$custoMaterial = 1000.00;
$custoMaoDeObra = 500.00;
$custoTotal = $custoMaterial + $custoMaoDeObra;
echo "o valor total do serviço é: R$ ". number_format($custoTotal, 2, ',', '.');