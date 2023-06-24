<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Forms in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
    <h1>Testing forms in PHP</h1>
    </header>

    <section>
        <form action="form.php" method="get">
         <label for="nome">Nome:</label>  
         <input type="text" name="nome" id="id_nome">
         <label for="sobrenome">Sobrenome:</label> 
         <input type="text" name="sobrenome" id="id_sobrenome">
         <label for="email">Email:</label>
         <input type="text" name="email" id="id_email">
         <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>