<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_GET['s'] ??0;
    $salario_minimo = 1380;
    $vezes;
    $resto;
    ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
       <label for="sal">Salário (R$):</label>
       <input type="number" name="s" id="s"  value="<?=$Salario?>">
        <p>Considerando o salário mínimo de
                <strong>R$1380,00</strong>
        </p>
       <input type="submit" value="Calcular">
    </form>
  </main>  

  <section>
    <h2>Resultado Final</h2>
    <?php 
    
    if ($salario>=$salario_minimo){
        $vezes = intdiv($salario, $salario_minimo);
        $resto = $salario - $salario_minimo*$vezes;
    }
    echo "Quem recebe um salário de R$" .number_format($salario, "2", ",", "." ) .  " ganha <strong>$vezes salários minimos</strong>  + $resto."
    ?>
  </section>
</body>
</html>