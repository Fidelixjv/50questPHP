<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Tabuadas 1 a 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .tabuada {
            background: #fff;
            border: 2px solidrgb(32, 12, 124);
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 0 10px rgba(12, 61, 168, 0.3);
            width: 150px;
        }
        .tabuada h2 {
            text-align: center;
            color:rgb(28, 12, 168);
            margin-bottom: 10px;
        }
        .tabuada p {
            margin: 4px 0;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

<?php
for ($num = 1; $num <= 5; $num++) {
    echo "<div class='tabuada'>";
    echo "<h2>Tabuada do $num</h2>";
    for ($mult = 1; $mult <= 10; $mult++) {
        $resultado = $num * $mult;
        echo "<p>$num x $mult = $resultado</p>";
    }
    echo "</div>";
}
?>

</body>
</html>
