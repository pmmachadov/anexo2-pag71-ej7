<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    include 'funlib.php';
    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo2-pag71-ej7" . "</td>";
    echo "</tr>";
    echo "<td> " . "echo media(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);" . "</td>";
    echo "<td> " . "5.5" . "</td>";
    echo "</tr>";
    echo "</table>";
?>

    <?php
    require_once 'funlib.php';
    echo media(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    ?>

</body>

</html>