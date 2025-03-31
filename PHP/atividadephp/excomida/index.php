<?php
    include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
</body>
</html>
    <header>
        <h1>Cardápio</h1>
    </header>

    <div id="comida">
        <div class="lista">
             <?php
            $sql = "SELECT * FROM catalogo";
            $query = mysqli_query($conexao, $sql) or die ("Erro na Requisição!".mysqli_error($conexao));
            
            while($dados = mysqli_fetch_assoc($query)){
               ?>

                    <ul>
                        <div class="card">
                            <li><?=$dados['nome']?></li>
                            <li> R$<?=$dados['valor']?></li>
                            <img src="<?=$dados['imagem']?>"></img>
                        </div>
                    </ul>
                <?php
            
           }  
        ?>
        
</div>
    </div>