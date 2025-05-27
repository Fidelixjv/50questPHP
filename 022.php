<?php
echo "produtos pares: <br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}