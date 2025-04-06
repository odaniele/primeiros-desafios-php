<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas 1.0</h1>
    </header>
    <main>
        <?php 
        $valorReal = $_GET["valor"];
        $converte = $valorReal / 5.84;
        echo "Seus R$ $valorReal equivalem à US$ $converte";
        echo "<p>Cotação fixa de R$5,84 informada diretamente no código";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>