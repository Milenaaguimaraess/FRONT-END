<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>

    <a href="pagina2.php">Pag 2</a>
    <?php
        // include - inclue um código de arquivo estrangeiro
        include_once "scripts/header.php";
        // inlcude - inclue um código de arquivo estrangeiro apenas
        // uma vez, caso novamente chamdo, o segundo 
        // chamado será ignorado
        include_once "scripts/teste.php";
        //posso colocar quantas vezes quiser;
        //include "scripts/teste.php";
        //include "scripts/teste.php";

        // o once e o require são diferentes pq o requere apresenta as linhas de erros com mais especificação
        require_once "scripts/teste2.php";
    ?>  
    
</body>
</html>