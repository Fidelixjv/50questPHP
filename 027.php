<?php
$participantes = ["joao", "ana", "jhon", "ian"];
echo "<h2>Participantes</h2>";

for ($i = 0; $i < count($participantes); $i++) {
    echo "<p>Participante " . ($i + 1) . ": " . $participantes[$i] . "</p>";
}