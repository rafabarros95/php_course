<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
    <h1>Resultado Final </h1>
<?php 
$n = $_GET["numero"];
echo "O valor digitado foi <strong>$n</strong> <br>";
$antecessor = $n-1;
echo "Seu antecessor e: <strong>$antecessor</strong> <br>";
$sucessor = $n+1;
echo "Seu sucessor e: <strong>$sucessor</strong> <br>";
?>
 <!-- <a href="javascript:history.go(-1)">Voltar</a> -->
 <form action="desafio1.html"><input type="submit" value="Voltar" ></form>
   
</main>
 
</body>
</html>