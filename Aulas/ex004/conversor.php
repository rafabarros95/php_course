<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../ex003/style.css">
</head>
<body>
    
    <main>
        <h1>Resultado Final:</h1>
        <p>
            <?php 
            $val = $_GET["valor"];
            $dollar = $val/5.04;
            echo "O valor corresponde a: US\$ <strong>". number_format($dollar,2,",","."). " </strong>doláres"; 
            //number_format com 2 casas a direita da virgula
           
            ?>
            <form action="index.html"><input type="submit" value="Voltar" ></form>
            
        </p>
        
    </main>
</body>
</html>

