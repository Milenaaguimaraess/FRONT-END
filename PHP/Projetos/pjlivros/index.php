<?php
    include_once('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/index.css">
    
</head>
<body>
    <header>
        <nav>
        <a href="index.php?menu=home">Home</a>
            <a href="index.php?menu=cadastro">Cadastro</a>
            <!-- mudar ou add algo relacionado a cadastro pra parar de bugar -->
          
        </nav>
        <h1>Our Library</h1>
    </header>

    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
            $pagina = "home"; 
        }

        switch($pagina){
            case 'home':
                include("pages/home/home.php");
                break;
            case 'lista':
                include("pages/listaLivros/listalivros.php");
                break;
            case 'cadastro':
                include("pages/listaLivros/adicionarlivros.php");
                break;
            case 'dblistalivros':
                include("pages/listaLivros/dbAdicionarlivros");
                break;
            default:
                include("pages/home/home.php");
                break; 
            }

        ?>
    </main>
    
</body>
</html>