<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomes = [];
    $notas = [];
    
    for ($i = 1; $i <= 10; $i++) {
        $nomes[$i] = $_POST["nome" . $i];
        $notas[$i] = $_POST["nota" . $i];
    }

    $somaNotas = array_sum($notas);
    $media = $somaNotas / count($notas);

    $maiorNota = max($notas);
    $indexMaiorNota = array_search($maiorNota, $notas);
    $nomeMaiorNota = $nomes[$indexMaiorNota];

    echo "<h2>Resultados</h2>";
    echo "<p>Média da Classe: " . number_format($media, 2, ',', '.') . "</p>";
    echo "<p>Aluno com a Maior Nota: " . $nomeMaiorNota . " (Nota: " . $maiorNota . ")</p>";
}
?>
