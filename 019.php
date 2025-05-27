<?php
$SalarioDesenvolvedor = "5000.00";
$SalarioDesign = "3000.00";
$SalarioGerente = "8000.00";
$funcionario = "Gerente";
switch (strtoupper($funcionario)) {
    case "DESENVOLVEDOR":
        echo "Salário do desenvolvedor: R$ " . $SalarioDesenvolvedor;
        break;
    case "DESIGN":
        echo "Salário do design: R$ " . $SalarioDesign;
        break;
    case "GERENTE":
        echo "Salário do gerente: R$ " . $SalarioGerente;
        break;
    default:
        echo "Cargo não encontrado";
        break;
}