<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        $numero =$_GET["num"];
        echo "<p> O número escolhido foi: " . $numero; 
        echo "<p> O seu antecessor é: " . $numero - 1 ;
        echo "<p> O seu sucessor é: " . $numero + 1;
        ?>

    <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>
</html>