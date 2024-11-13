<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = [];
    
    for ($i = 1; $i <= 10; $i++) {
        $numeros[] = $_POST["numero" . $i];
    }

    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero < 0) {
            $negativos++;
        } elseif ($numero > 0) {
            $positivos++;
        }

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "<h2>Resultados</h2>";
    echo "<p>Números Negativos: $negativos</p>";
    echo "<p>Números Positivos: $positivos</p>";
    echo "<p>Números Pares: $pares</p>";
    echo "<p>Números Ímpares: $impares</p>";
}
?>
