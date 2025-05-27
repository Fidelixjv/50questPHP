<?php
$resumo = "O PHP é uma linguagem de script de código aberto amplamente utilizada para desenvolvimento web. É especialmente adequada para criar páginas dinâmicas e interativas. O PHP é fácil de aprender, possui uma grande comunidade e oferece uma vasta gama de bibliotecas e frameworks que facilitam o desenvolvimento de aplicações web robustas.";
$numerocaracteres = str_word_count($resumo);

echo "O resumo possui " . $numerocaracteres . " palavras.";

if ($numerocaracteres >= 350 && $numerocaracteres <= 500) {
    echo " O resumo esta dentro do limite.";
} else {
    echo " O resumo esta fora do limite.";
}