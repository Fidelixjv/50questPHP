<?php
function elegibilidade($idade) {
    if ($idade >= 18) {
        echo "Acesso Liberado";
    } else {
        echo "Acesso Negado";
    }
}

$idade = 18;
echo elegibilidade($idade);