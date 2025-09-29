<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $minimo = 1_518.00;
    $salario = $_GET['sal'] ?? 0;
    
    
    ?>


    <main>
        <h1>Informe seu Salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            
            <p>Considerendo o salrio minimo de R$<?=number_format($minimo, 2, ",", ".")?></p>

            <input type="submit" value="Calcular">



        </form>





    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p>Que recebe um salario de R\$" . number_format($salario, 2, "," , ".") . " ganha $tot salarios minimos + R\$ " . number_format($dif, 2, "," , "."). "</p>"
        
        ?>

    </section>

      
 
     
</body>
</html>