<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main> 
    <?php 
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
    $email = $_GET["email"];
    echo "O nome digitado foi <strong>$nome $sobrenome </strong>, cujo o email e: $email";
    ?>
     
    <p><a href="javascript:history.go(-1)">Voltar para o formulario</a>  </p>
</main>

</body>
</html>