<?php
// defende de comandos que podem alterar o db
$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$avaliacao = mysqli_real_escape_string($conexao,$_POST['avaliacao']);


$sql = "INSERT INTO livros (
    nomeLivros,
    descricaoLivros,
    avaliacaoLivros
) VALUES ( 
    '{$nome}',
    -- '{$imagem}',
    '{$descricao}',
    '{$avaliacao}'
)";

mysqli_query($conexao,$sql) or die("Erro ao adicionar Livro".mysqli_error(($conexao)));

echo "O livro {$nome} foi adicionado!"
?> 