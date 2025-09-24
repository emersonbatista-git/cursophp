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
    
    <?php
   echo "<h1>Trabalhando com numeros aleatórios</h1>";
   echo "Gerando um numero aleatorio entre 0 e 100...";
   echo  "<br/>O valor gerado foi " . mt_rand(1,100);
    
    ?>
   
  
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
   
   
   
   
</main>
   
     
</body>
</html>