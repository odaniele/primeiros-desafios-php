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
        <h1>Conversor de moedas 2.0</h1>
    </header>
    <main>
        <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);


        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $valorReal = $_GET["valor"] ?? 0;
        
        $dolar = $valorReal / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $valorReal, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        echo "<p>Cotação de R$ " . $cotacao . " de acordo com atualzação diária do  Banco Central";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>