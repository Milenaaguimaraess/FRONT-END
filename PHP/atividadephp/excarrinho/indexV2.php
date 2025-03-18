<?php
    // INICIA SESSÃO
    session_start();

    // private - n pode mexer no código fora do class (setoriza mais a informação, infos mais sigilosas)
    // public - qualquer parte do código pode mexer no atributo e fora do class
    class Produto{
        public $id;
        public $nome;
        public $valor;
        public $desc;

        // __ -> da "noção" para o php que algo vai se rodado automaticamente
        public function __construct($id,$nome,$valor,$desc){
            $this->id = $id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->desc = $desc;
        }
    }

    // isset -> verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }

    // ADICIONA PRODUTO
    // to sobrescrevendo no carrinho, mas o += mantém oq tava antes e adiciona
        if(isset($_GET['produto'])){
            $produtosDados = new Produto($_GET['id'],$_GET['produto'],$_GET['valor'],$_GET['desc']); 
        //$_SESSION['carrinho'] += $_get['produto'];
        // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO PODE SER ADICIONADO
    // [] -> SUBSTITUTO DO +=
        $_SESSION['carrinho'][] = $produtosDados ;
    }

        if(isset($_GET['deletarCarrinho'])){
       // session_destroy(); ou
         $_SESSION['carrinho'] = [];
    }

        if(isset($_GET['removerItem'])){
            foreach($_SESSION['carrinho'] as $id => $produto){
            if($produto->id == $_GET['removerItem']){
                unset($_SESSION['carrinho'][$id]);
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
                }
            }
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
            <a href="?id=1&produto= Kit de Pincéis&valor=320.00&desc=25 pincéis de para pintura"> Adicionar Kit Pincel</a> <br>
            <a href="?id=2&produto=Tinta a óleo&valor=50.00&desc=80ml, bordô">Adicionar Tinta a óleo</a> <br>
            <a href="?id=3&produto=Tela de pintura&valor=49.99&desc=40x60cm">Adicionar Tela de pintura</a> <br>
            <a href="?id=4&produto=Diluidor de tinta&valor=69.99&desc=150ml">Adicionar Diluidor de tinta</a>
        </div> 
    <br>

    <!-- 'ul' é lista não numerada e 'ol' é lista numerada -->
    <ol>
        <?php
            // foreach(array as alias){}
            //foreach(filmes as filme){ filme.nome , filme.desc }
            // $_SESSION['carrinho'] é o array 
            foreach($_SESSION['carrinho'] as $produto){
                echo "<li> 
                    <h3> $produto->nome </h3>
                    <h4> $produto->desc </h4>
                    <p> $produto->valor </p>
                    <a href='?removerItem=$produto->id'> Remover Item </a>
                </li>";
        }
        ?>
    </ol>

     <!-- VALOR TOTAL DO CARRINHO -->
     <?php
        $valorTotal = 0;

        foreach($_SESSION['carrinho'] as $produto){
            $valorTotal += $produto->valor;
        }

    if($valorTotal == 0){
        echo "<h3> O carrinho está vazio </h3>";
    }else{
        echo "<h3> O valor total é R$ $valorTotal  </h3>";
    }
    ?>

        <!-- DELETAR -->
        <a href="?deletarCarrinho=True">Limpar Carrinho</a>
    
</body>
</html>