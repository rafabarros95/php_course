<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preco = $_GET['preco'] ??'0';
    $reaj = $_REQUEST['reaj'] ??'0';
    ?>
  <main>
    <h1>Reajustador de Precos</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="preco">Preco do Produto(R$)</label>
    <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
    <label for="reaj">Qual será o percentual de reajuste?(<strong><span id="pc">?</span>%</strong>)</label>
    <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
    <input type="submit" value="Reajustar">
    </form>
    <?php 
    $aumento = $preco*$reaj/100;
    $novo = $preco + $aumento;
    ?>
  </main>  

  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$<?=number_format($preco,"2", ",", ".")?>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$<?=$novo?></strong> a partir de agora</p>
  </section>
  <script>
    /* declaracoes automaticas */
    mudaValor();
    function mudaValor() {
        pc.innerText = reaj.value;
    }
  </script>
</body>
</html>