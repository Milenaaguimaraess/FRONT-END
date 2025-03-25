<?php
    include('db/conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concenssionária</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <nav>
            <!-- ? é pra saber que é uma requisição -->
            <a href="index.php?menu=home">HOME</a>
            <a href="index.php?menu=lista">LISTA</a>
        </nav>
    </header>

    <main>
        <?php
        // caso a pag seja home, eu chamo o arquivo do home, se for lista, chamo o arqv lista, se for bug, n chamo nenhum 
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
                include("pages/listaCarros/listaCarros.php");
                break;
            case 'adicionarCarro':
                include("pages/listaCarros/adicionarCarro.php");
                break;
            case 'dbAdicionarCarro':
                include("pages/listaCarros/dbAdicionarCarro.php");
                break;
                // caso a função n estrja configurada, voltamos pra pg do home
            default:
                include("pages/home/home.php");
                break; 
        }
        ?>
    </main>


</body>
</html>