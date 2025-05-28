<?php
echo "<table border='1'>";
echo "<tr><th>matricula</th><th>Nome</th><th>Nota</th></tr>";
for ($i = 1; $i <=10; $i++) {
    echo "<tr>";
    echo "<td>100$i</td>";
    echo "<td>Aluno $i</td>";
    echo "<td>7.$i</td>";
    echo "</tr>";
}
echo "</table>";