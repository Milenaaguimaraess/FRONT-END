<h2>Seja Bem-vindo à Our Library</h2>

<!-- <a href="index.php?menu=cadastro">
    <button type="button">Adicionar livros</button>
</a> -->
       
    <?php
    //UTILIZANDO BANCO DE DADOS
    $sql = "SELECT * FROM livros";
    $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <div class="container">
                <img src="<?=$dados['imagemLivros'] ?>" alt="">
                <p class="titulo"><?= $dados['nomeLivros'] ?></p>
                <p>Descrição: <?=$dados['descricaoLivros']?></p>
                <p>Avaliação: <?=$dados['avaliacaoLivros']?></p>
            </div>
        <?php
    }
    ?>