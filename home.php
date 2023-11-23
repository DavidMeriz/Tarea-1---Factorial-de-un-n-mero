<?php
function calcularFactorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFactorial($numero - 1);
    }
}

// Calcular el factorial de 10 números
for ($i = 1; $i <= 10; $i++) {
    $resultado = calcularFactorial($i);
    echo "El factorial de $i es: $resultado <br>";
}
?>
