<?php
$usuarioativo = false;
$permissaoadmin = true;
if ($usuarioativo && $permissaoadmin) {
    echo "acesso total concedido";
} else {
    echo "acesso negado";
}