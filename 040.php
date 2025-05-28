<?php
function registrarLogEvento($mensagem) {
    $dataHora = date("Y-m-d H:i:s", time());

    $linhaLog = "[$dataHora] - $mensagem" . PHP_EOL;

    echo $linhaLog;

    $arquivoLog = "eventos.log";

    file_put_contents($arquivoLog, $linhaLog, FILE_APPEND);
}
registrarLogEvento("Usuário fez login");
registrarLogEvento("Erro ao carregar página");
