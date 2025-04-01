<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php 
        $numAleatorio = mt_rand(0, 100);
        echo "<p> Gerando números aleatórios entre 0 e 100...</p>";
        echo "O valor gerado foi " . $numAleatorio;
        ?>

        <button onclick="javascript:document.location.reload()">Sortear outro número</button>
        
        
    </main>
</body>
</html>
