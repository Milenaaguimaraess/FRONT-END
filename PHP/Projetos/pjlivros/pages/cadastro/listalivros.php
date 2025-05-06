<h2>Adicione novos livros aqui</h2>

<a href="index.php?menu=adicionarCarro">
    <button type="button">Adicionar livros</button>
</a>
        <!--<th>Nome</th>
        <th>Descrição</th>
        <th>Avaliação</th> -->
    
    <?php
    //UTILIZANDO BANCO DE DADOS
    $sql = "SELECT * FROM livros";
    // pedidos ao db (conexão com o db) -> query
    $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

    // fetch_assoc -> vai acessar um query e contar os resultados
    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <li><?=$dados['nome']?></li>
            <img src="<?=$dados['imagem']?>"></img>
            <li><p><?=$dados['descricao']?></p></li>
            <li><?=$dados['avaliacao']?></li>
        <?php
    }
    ?>