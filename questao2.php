<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos Alunos</title>
    <link rel="stylesheet" href="questao2.css">
</head>
<body>
    <h2>Entrada de Dados dos Alunos</h2>
    <form action="processar.php" method="post">
        <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="input-group">
                <label for="nome<?php echo $i; ?>">Nome do Aluno <?php echo $i; ?>:</label>
                <input type="text" name="nome<?php echo $i; ?>" required>

                <label for="nota<?php echo $i; ?>">Nota do Aluno <?php echo $i; ?>:</label>
                <input type="number" name="nota<?php echo $i; ?>" min="0" max="10" required>
            </div>
        <?php endfor; ?>

        <button type="submit">Calcular Média e Maior Nota</button>
    </form>
</body>
</html>
