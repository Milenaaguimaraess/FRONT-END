<?php
    // INICIA SESSÃO
    session_start();

    // isset -> verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }

    // ADICIONA PRODUTO
    // to sobrescrevendo no carrinho, mas o += mantém oq tava antes e adiciona
    if(isset($_GET['produto'])){
    //$_SESSION['carrinho'] += $_get['produto'];
    // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO PODE SER ADICIONADO
    // [] -> SUBSTITUTO DO +=
    $_SESSION['carrinho'][] = $_GET['produto'];
    }
    if(isset($_GET['deletarCarrinho'])){
       // session_destroy(); ou
       $_SESSION['carrinho'] = [];
    }
    // var_dump pra ver se deu certo
    //var_dump($_SESSION['carrinho']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    
    <h1>Carrinho de Compras</h1>
    <div class="lista">
    <div class="itens">
        <h3>
        <a href="?produto=Pincel"> Adicionar Pincel</a> <br>
        <a href="?produto=Tinta">Adicionar Tinta</a> <br>
        <a href="?produto=Tela">Adicionar Tela</a> <br>
        <a href="?produto=Diluidor">Adicionar Diluidor</a> 

    </h3>
    <!-- DELETAR -->
     <h4>
    <a href="?deletarCarrinho=True" class="delete">Deletar Carrinho</a>
    </h4>
    <!-- 'ul' é lista não numerada e 'ol' é lista numerada -->
     </div>
     </div>
    <ol>
    <?php
        // foreach(array as alias){}
        //foreach(filmes as filme){ filme.nome , filme.desc }
        // $_SESSION['carrinho'] é o array 
        foreach($_SESSION['carrinho'] as $produto){
            echo "<li> $produto </li>";
        }
    ?>
    </ol>
    
</body>
</html>