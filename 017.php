<?php
$temperatura = -1;
if ($temperatura <0 ) {
    echo "alerta de gelo";
} elseif ($temperatura >= 0 && $temperatura <= 15) {
    echo "clima ameno";
} elseif ($temperatura > 15 && $temperatura <= 25) {
    echo "clima agradavel";
} else {
    echo "atenção: calor extremo";
}