<h1>VOCÊ ESTÁ NA LISTA DE CARROS!</h1>

<a href="index.php?menu=adicionarCarro">
    <button type="button">Adicionar carro</button>
</a>

    <form action="index.php?menu=lista" method="post">
        <input type="text" name="pesquisa" id="pesquisa">
        <button type="submit">Pesquisar</button>
    </form>

<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>

<?php
    //UTILIZANDO BANCO DE DADOS
    if(isset($_POST['pesquisa'])){
        $termoPesquisado = $_POST['pesquisa'];
    }else{
        $termoPesquisado = "";
    }

    // upper -> serve para aumentar a caixa de texto
    $sql = "SELECT idCarro,
    upper(modeloCarro) AS modeloCarro,
    upper(marcaCarro) AS marcaCarro,
    upper(valorCarro) AS valorCarro,
    DATE_FORMAT(anoCarro,'%d/%m/%y') AS anoCarro,
    upper(corCarro) AS corCarro 
    FROM carros WHERE
    idCarro = '$termoPesquisado' OR 
    modeloCarro LIKE '%$termoPesquisado%
    ORDER BY modeloCarro ASC'
    ";
    // pedidos ao db (conexão com o db) -> query
    $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

    // fetch_assoc -> vai acessar um query e contar os resultados
    while($dados = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?=$dados['modeloCarro'] ?></td>
            <td><?=$dados['marcaCarro'] ?></td>
            <td><?=$dados['valorCarro'] ?></td>
            <td><?=$dados['anoCarro'] ?></td>
            <td><?=$dados['corCarro'] ?></td>
            <!-- EDITAR -->
            <!-- <td><a href="#">Editar</a></td> -->
            <!-- CASO TENHA BOOTSTRAP USAR O TREM ABAIXO, SE N, USAR O DE CIMA QUE 
             FICA A MSM COISA -->
            <!-- & -> linka algo a mais além da pagina chamada, no caso está chamando id de cada carro -->
            <td><a href="index.php?menu=editarCarro&idCarro=<?=$dados['idCarro']?>" class="btn btn-primary">Editar</a></td>
            <!-- DELETAR -->
            <td><a href="index.php?menu=deletarCarro&idCarro=<?=$dados['idCarro']?>" class="btn btn-danger">Deletar</a></td>
        </tr>
        <?php
    }
    ?>
</table>