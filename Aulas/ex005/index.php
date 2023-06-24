<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
    //capturando dados do formulario retroalimentado
    $valor1 = $_GET['v1'] ?? 30;
    $valor2 = $_GET['v2'] ?? 50;
    $soma = $valor1+$valor2;
    /*echo "A soma de " . $valor1 . " com o " . $valor2 . " equivale a: " . $soma;*/
    ?>
   
   <main>     
    <h1>Somador de Valores</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> <!--abreviacao do php com o echo -->
    <label for="v1">Valor 1</label>
    <input type="number" name="v1" id="v1" value="<?=$valor1?>">
    <label for="v2">Valor 2</label>
    <input type="number" name="v2" id="v2"
    value="<?=$valor2?>">
    <input type="submit" value="Somar">
    </form>
   </main>

   <section id="resultado">
    <h2>Resultado da Soma</h2>
    <?php 
    echo "A soma e: $soma";
    ?>
   </section>
</body>
</html>