<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "el valor de pi es:";
echo "<br>";
echo(pi());
echo "<br>";
echo "Funciones PHP min() y max()";
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
echo "Función PHP abs()";
echo "<br>";
echo(abs(-6.7));
echo "<br>";
echo "Función PHP sqrt()";
echo "<br>";
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
echo "<br>";
echo "Función PHP redonda ()";
echo "<br>";
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
echo "<br>";
echo "Números al azar";
echo "<br>";
echo(rand());
echo "<br>";

?>

</body>
</html>