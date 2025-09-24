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
       
    </header>
   <main>

    <h1>Resultado Final</h1>
    
    <p>
        <?php
        $n = $_GET["numero"];
        $a = $n - 1;
        $s = $n + 1;
        echo "O numero escolhido foi <strong>$n</strong> ";
        echo "<br/>O seu antecessor é $a";
        print "</br>O seu sucessor é $s";
        
        ?>
    </p>

    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
   
</main>
   
     
</body>
</html>