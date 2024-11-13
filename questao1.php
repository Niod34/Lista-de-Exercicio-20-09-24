<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questao1.css">
    <title>Cadastro de Produtos</title>

</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "
                <label>Nome do Produto $i:</label>
                <input type='text' name='produto[]' required>
                <label>Preço do Produto $i (R$):</label>
                <input type='number' name='preco[]' step='0.01' required>
            ";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $produtos = $_POST['produto'];
        $precos = $_POST['preco'];

        function contarMenorQue50($precos) {
            $contador = 0;
            foreach ($precos as $preco) {
                if ($preco < 50) {
                    $contador++;
                }
            }
            return $contador;
        }

        function listarEntre50e100($produtos, $precos) {
            $nomes = [];
            foreach ($precos as $index => $preco) {
                if ($preco >= 50 && $preco <= 100) {
                    $nomes[] = $produtos[$index];
                }
            }
            return $nomes;
        }

        function calcularMediaAcimaDe100($precos) {
            $soma = 0;
            $contador = 0;
            foreach ($precos as $preco) {
                if ($preco > 100) {
                    $soma += $preco;
                    $contador++;
                }
            }
            return $contador > 0 ? $soma / $contador : 0;
        }

        $quantidadeMenor50 = contarMenorQue50($precos);

        $produtosEntre50e100 = listarEntre50e100($produtos, $precos);

        $mediaAcima100 = calcularMediaAcimaDe100($precos);
        ?>

        <hr>
        <h3>Resultados:</h3>
        <p><strong>Quantidade de produtos com preço inferior a R$50,00:</strong> <?php echo $quantidadeMenor50; ?></p>
        <p><strong>Produtos com preço entre R$50,00 e R$100,00:</strong> 
        <?php echo !empty($produtosEntre50e100) ? implode(", ", $produtosEntre50e100) : 'Nenhum'; ?></p>
        <p><strong>Média dos preços dos produtos com preço superior a R$100,00:</strong> R$<?php echo number_format($mediaAcima100, 2, ',', '.'); ?></p>
    <?php } ?>
</body>
</html>
