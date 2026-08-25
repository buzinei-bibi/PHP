<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeiro site em php</title>
</head>
<body>
    <h1>olá mundo! eu sou a buzina de bibi</h1>
    <h2>meu primeiro arquivo em php</h2>
    <?php
    if ($_POST) {echo "<p> este é um parágrafo em php </p>";
    $nome = $_POST['nome']; // criando variável string 
    $idade = $_POST['idade']; // criando variável integer 

     // sempre vai ser $ quando para variável e não pode começar com zero 
     // não mostrar o php no navegador, apenas o html ou seja: impossível de copiar o código de alguém
     // melhor usar aspas duplas no código 
     // não precisa definir se é variável, string .. 
     // echo - mais vantagem de usar em vez de print 
     // action - que vai receber os dados do formulário

     echo '<p> meu nome é ' .$nome . ', e tenho  ' .$idade . ' anos </p>';
    }
    ?>

    <form method="POST">
        <label>nome:</label>
        <input name= "nome" placeholder="digite seu nome">
        <br>
        <label>idade:</label>
        <input name= "idade" placeholder="digite sua idade">
        <br>
        <button type"submit">enviar</button> 

    </form>
    
</body>
</html>