<?php
$estadoCivil = "s";
switch (strtoupper($estadoCivil)) {
    case "S":
        echo "solteiro";
        break;
    case "C":
        echo "casado";
        break;
    case "D":
        echo "divorciado";
        break;
    case "O":
        echo "outro";
        break;
    default:
        echo "estado civil inválido";
        break;
} 