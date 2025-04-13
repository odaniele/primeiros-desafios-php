<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas 1.0</h1>
    </header>
    <main>
        <?php 
        $valorReal = $_GET["valor"] ?? 0;
        $cotacao = 5.87;
        $dolar = $valorReal / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $valorReal, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        echo "<p>Cotação fixa de R$5,87 informada diretamente no código";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>