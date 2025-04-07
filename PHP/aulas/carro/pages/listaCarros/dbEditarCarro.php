<!--  -->
  <h3>Atualizar carro</h3>

<?php
    // defende de comandos que podem alterar o db
    $id = mysqli_real_escape_string($conexao,$_POST['idCarro']);
    $modelo = mysqli_real_escape_string($conexao,$_POST['modelo']);
    $marca = mysqli_real_escape_string($conexao,$_POST['marca']);
    $valor = mysqli_real_escape_string($conexao,$_POST['valor']);
    $ano = mysqli_real_escape_string($conexao,$_POST['ano']);
    $cor = mysqli_real_escape_string($conexao,$_POST['cor']);

    // UPDATE TABLE SET NAME = NAME WHERE ID -> preciso colocar o where id para especificar onde que quero mudar o nome, pq se n, todos os nomes serão mudados

    $sql = "UPDATE carros SET
    modeloCarro = '{$modelo}',
    marcaCarro = '{$marca}',
    valorCarro = '{$valor}',
    anoCarro = '{$ano}',
    corCarro = '{$cor}'
    WHERE idCarro = '{$id}'
    ";

    mysqli_query($conexao,$sql) or die("Erro ao atualizar");

    echo "O carro foi atualizado 🤞";
?>