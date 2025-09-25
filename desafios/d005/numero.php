<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
    
    <?php 
    
    $num = $_POST["numero"];

    echo "<p>Analisando o numero <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuario:</p>";

    $int = (int)$num;
    $fra = $num - $int; 

    echo "<ul><li> A parte inteira do numero é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
    echo "<li> A parte fracionaria do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";
    
    ?>

     <button onclick="javascript:history.go(-1)">Voltar</button>
    

    </main>

   
</body>
</html>