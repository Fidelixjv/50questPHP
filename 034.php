<?php
function MediaAluno($n1, $n2) {
    return ($n1 + $n2) / 2;
}
$n1 = 7;
$n2 = 7;

$MediaFinal = MediaAluno($n1, $n2);
echo "Media final: " . $MediaFinal;