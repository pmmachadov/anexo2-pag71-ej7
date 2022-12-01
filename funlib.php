<?php
function media(...$numeros)
{
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma / count($numeros);
}
?>