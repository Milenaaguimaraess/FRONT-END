<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../styles/all.css">
</head>
<body>
    <header>
        <div id="logo">Logo</div>
        <nav>
            <ul>
                <li><a href="menu.php">Home</a></li>
                <li><a href="../index.php">Log out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php 
            // $titulo = "Matrix";
            // var_dump($titulo);
            // // ajuda a acomannhar oq ta acontecendo no sistema

            // $status = "True";
            // var_dump($status);

        // se a resolução estiver estranha, usa-se o var_dump
            // request -> requisição
            var_dump($_REQUEST); 
            // var_dump($_REQUEST); -> aceita GET, POST e cookies, imprime na tela todos os dados salvos
            // var_dump($_GET)

            $nome = $_REQUEST['nome'];
            $email = $_REQUEST['email'];
            $senha = $_REQUEST['senha'];

            echo "Olá $nome, seja bem vindo! <br>";
            echo "$nome, seu email é: $email <br>";
            echo "e sua senha é $senha";
        ?>
    </main>

    <footer>
        Todos os direitos reservados a Milena
        <?php echo date("Y") ?>
    </footer>
</body>
</html>