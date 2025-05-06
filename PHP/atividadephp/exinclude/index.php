<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule a Idade</title>
</head>
<body>

<!-- tudo q precisar mandar ou enviar é bom que utilize um form no php, se n, é só deixar o include -->
 <!-- ATIVIDADE 1 -->
   <form action="scripts/cotacao.php" method="post">
   <!-- step -> ajuda a colocar numeros quebradors (decimais) -->
        <input step= "0.01" name="dolar" id="dolar" type="number">
        <button type="submit">Enviar</button>
    </form>
    <hr>
    
 <!-- ATIVIDADE 2 -->
   <form action="scripts/idade.php" method="post">
   <!-- idade é numero inteiro, por isso n tem o step -->
   <input name="idade" id="idade" type="number">
        <button type="submit">Enviar</button>
   </form>
<?php

   include "scripts/numAleatorio.php";
?>
    
</body>
</html>