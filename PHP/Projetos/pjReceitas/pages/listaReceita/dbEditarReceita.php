<h3>Atualizar Receita</h3>

<?php
    // defende de comandos que podem alterar o db
    $id = mysqli_real_escape_string($conexao,$_POST['idComida']);
    $titulo = mysqli_real_escape_string($conexao,$_POST['titulo']);
    $descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
    $receita = mysqli_real_escape_string($conexao,$_POST['receita']);
    $autor = mysqli_real_escape_string($conexao,$_POST['autor']);
    $tipo = mysqli_real_escape_string($conexao,$_POST['categoria']);

    // UPDATE TABLE SET NAME = NAME WHERE ID -> preciso colocar o where id para especificar onde que quero mudar o nome, pq se n, todos os nomes serão mudados

    $sql = "UPDATE receitas SET
    tipoComida = '{$tipo}',
    descricaoComida = '{$descricaoComida}',
    receitaTexto = '{$receitaTexto}',
    autorComida = '{$autorComida}',
    categoriaComida = '{$categoriaComida}'
    WHERE idComida = '{$id}'
    ";

    mysqli_query($conexao,$sql) or die("Erro ao atualizar");

    echo "A receita foi atualizada 🤞";
?>