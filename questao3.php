<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Números</title>
    <link rel="stylesheet" href="questao3.css">
</head>
<body>
    <h2>Entrada de 10 Números</h2>
    <form action="processar3.php" method="post">
        <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="input-group">
                <label for="numero<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
                <input type="number" name="numero<?php echo $i; ?>" required>
            </div>
        <?php endfor; ?>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
