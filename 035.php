<?php
$n = 2;
function Verificar($n) {
    return $n % 2 == 0;
}
if (Verificar($n) ){
    echo ("o codigo $n é par.");
} else{
    echo ("o codigo $n é impar.");
}
