<h2>Adicione novos livros aqui</h2>

<!-- <a href="index.php?menu=adicionarlivros">
    <button type="button">Adicionar livros</button>
</a> -->
       
    <?php
    //UTILIZANDO BANCO DE DADOS
    $sql = "SELECT * FROM livros";
    $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <div class="container">
                <img src="<?=$dados['imagem'] ?>" alt="">
                <p class="titulo"><?= $dados['nome'] ?></p>
                <p><?=$dados['descricao']?></p>
                <p><?=$dados['avaliacao']?></p>
            </div>
        <?php
    }
    ?>