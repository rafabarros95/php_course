<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $numero = $_GET['num'] ??1;
    ?>
    <main>
        <?php 
        $quad = sqrt($numero);
        $cub = pow($numero,1/3); 
        ?>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
       <label for="num">Número</label>
       <input type="number" name="num" id="num"  value="<?=$numero?>">
       
       <input type="submit" value="Calcular Raízes">
    </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Analisando o <strong>número $numero</strong>, temos:";
        echo "<ul>";
        echo "<li>A sua raiz quadrada é <strong>" .number_format($quad,3,",",".")."</strong></li>";
        echo "<li>A sua raiz cúbica é <strong>" .number_format($cub,3,",",".") . "</strong></li>";
        echo "</ul>";
        ?>
    </section>
</body>
</html>