<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio com API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
         // Cotacao vinda da API do Banco Central
                $inicio = date("m-d-Y", strtotime("-7 days")) ;
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        //antes das datas, e necessario o uso do "\"

        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        //Quanto R$ vc tem?
        $real = $_REQUEST["din"] ?? 0;

        //Equivalencia em Dolar
        $dolar = $real/$cotacao;

        //Mostra o resultado

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p> Seus " . numfmt_format_currency($padrao,$real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>