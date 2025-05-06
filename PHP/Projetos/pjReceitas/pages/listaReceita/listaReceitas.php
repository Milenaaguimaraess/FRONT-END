<h1>VOCÊ ESTÁ NA LISTA de receitas!</h1>

<a href="index.php?menu=adicionarReceitas">
    <button type="button">Adicionar Receita</button>
</a>

    <form action="index.php?menu=lista" method="post">
        <input type="text" name="pesquisa" id="pesquisa">
        <button type="submit">Pesquisar</button>
    </form>

<table>
    
    <tr>
        <th>Título</th>
        <th>Decrição</th>
        <th>Receita</th>
        <th>Autor</th>
        <th>Categoria</th>
    </tr>



    <?php
    //UTILIZANDO BANCO DE DADOS
    if(isset($_POST['pesquisa'])){
        $termoPesquisado = $_POST['pesquisa'];
    }else{
        $termoPesquisado = "";
    }

    // upper -> serve para aumentar a caixa de texto
    $sql = "SELECT idComida,
    upper(tituloComida) AS tituloComida,
    upper(descricaoComida) AS descricaoComida,
    upper(receitaTexto) AS receitaTexto,
    upper(autorComida) AS autorComida,
    upper(categoriaComida) AS categoriaComida
    FROM comida WHERE
    idComida = '$termoPesquisado' OR 
    tituloComida LIKE '%$termoPesquisado%'
    ORDER BY tituloComida ASC
    ";
    // pedidos ao db (conexão com o db) -> query
    $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

    // fetch_assoc -> vai acessar um query e contar os resultados
    while($dados = mysqli_fetch_assoc($query)){
        
        ?>
        <tr>
            <td><?=$dados['tituloComida'] ?></td>
            <td><?=$dados['descricaoComida'] ?></td>
            <td><?=$dados['receitaTexto'] ?></td>
            <td><?=$dados['autorComida'] ?></td>
            <td><?=$dados['categoriaComida'] ?></td>
            <td><?=$dados['imagem_url'] ?></td>
            <!-- <td><img src='https://static.itdg.com.br/images/640-400/6b4a739b2983e0b9ba6419857cfffcb0/254047-original.jpg'></td> -->
            <!-- EDITAR -->
            <!-- <td><a href="#">Editar</a></td> -->
            <!-- CASO TENHA BOOTSTRAP USAR O TREM ABAIXO, SE N, USAR O DE CIMA QUE 
             FICA A MSM COISA -->
            <!-- & -> linka algo a mais além da pagina chamada, no caso está chamando id de cada carro -->
            <td><a href="index.php?menu=editarReceitas&idComida=<?=$dados['idComida']?>" class="btn btn-primary">Editar</a></td>
            <!-- DELETAR -->
            <td><a href="index.php?menu=deletarReceitas&idComida=<?=$dados['idComida']?>" class="btn btn-danger">Deletar</a></td>
        </tr>
        <?php
    }
    ?>
</table>