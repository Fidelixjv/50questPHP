<?php
$mediaAluno = 5.1;
if ($mediaAluno >= 7) {
    echo "aprovado";
} elseif ($mediaAluno >= 5 && $mediaAluno <= 6.9) {
    echo "recuperação";
} else {
    echo "reprovado";
}