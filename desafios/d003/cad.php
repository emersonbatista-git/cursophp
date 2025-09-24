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
    $n = $_GET["numero"];
    $c = 5.31;

    $dolar = $n / $c;
    
  
    echo "<p>Seus R$" . number_format($n, 2, ",", ".") . " equivalem a US$ " . number_format($dolar, 2, ",", "."). "</p>";
    echo "<p><br/>Cotação fixa de R$ 5,31 informada diretamente no codigo</p>";
   
    
    ?>   


    <button onclick="javascript:history.go(-1)">Voltar</button>
   
</main>
   
     
</body>
</html>