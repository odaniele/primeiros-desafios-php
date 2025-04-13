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
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <?php 
            $numeroReal = $_POST["numero"] ?? 0;
            $inteira = floor($numeroReal);
            $fracionaria = $numeroReal - $inteira; 
            echo "Analisando o número informado pelo usuário " . $numeroReal;
            echo "<p>- A parte inteira do número é " . $inteira;
            echo "<p>- A parte fracionária do número é " . $fracionaria;
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>
</body>
</html>