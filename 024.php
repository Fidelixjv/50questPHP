<?php
for ($i = 1; $i <=100; $i++) {
    echo "processando item $i<br>";

    if ($i == 50) {
        echo "limirte atingido<br>";
        break;
    }
}