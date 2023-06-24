<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    $an = $_GET['nasc'] ??2000;
    $futuro = $_GET['ano_desejado'] ??2023;
    ?>

   <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano voce nasceu?</label>
        <input type="number" name="nasc" id="nasc" max="2023" value="<?=$an?>">
        <label for="ano_desejado">Quer saber sua idade em que ano? (atualmente estamos em <strong>2023</strong>)</label>
        <input type="number" name="ano_desejado" id="ano_desejado"  value="<?=$futuro?>">
        <input type="submit" value="Qual será minha idade?">

    </form>
    <?php 
       $idade = $futuro-$an; 
    ?>
   </main> 

   <section>
    <h2>Resultado</h2>
    <?php 
    echo "Quem nasceu em ".$an." vai ter <strong>$idade anos</strong> em $futuro! "
    ?>
   </section>
</body>
</html>