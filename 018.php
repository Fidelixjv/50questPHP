<?php
$cor = "branco";
switch (strtoupper($cor)) {
    case "VERMELHO":
        echo "vermelho escolhido";
        break;
    case "AZUL":
        echo "azul escolhido";
        break;
    case "VERDE":
        echo "verde escolhido";
        break;
    default:
        echo "cor padrão escolhida";
        break;
}