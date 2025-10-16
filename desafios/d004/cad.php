<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
   <main>
    
    <?php
     /* ***** INICIO DO CODIGO PARA PEGAR COTAÇÃO ONLINE ***** */

   /*utilizar a data atual do sistema */
   $inicio = date("m-d-Y", strtotime("-7 days")); /*considerar 7 dias antes */
   $fim = date("m-d-Y");


    /*url gerada no site BC com formato JSON*, foi acrecentado \ para escape nas datas, mas com data fixa, substituir pelas variaveis*/
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    /*variavel dados para receber o json, com true no final para exibir em array, utilizamos var_dump para visualizar os campos onde foram salvos*/
    $dados = json_decode(file_get_contents($url), true);

    /* var_dump($dados); */

    /*criamos os campos de acordo com o var_dump */
    $cotacao = $dados["value"][0]["cotacaoCompra"];


    /* ****** FIM DO CODIGO PARA COTAÇÃO ONLINE ***** */


    $n = $_GET["numero"];
    $c = $cotacao;

    $dolar = $n / $c;
    
  
    echo "<p>Seus R$" . number_format($n, 2, ",", ".") . " equivalem a US$ " . number_format($dolar, 2, ",", "."). "</p>";
    echo "<p><br/>Cotação R$ $cotacao informada pelo Banco Central</p>";
   
    
    ?>   


    <button onclick="javascript:history.go(-1)">Voltar</button>
   
</main>
   
     
</body>
</html>