<?php
// defende de comandos que podem alterar o db
$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
// $imagem = mysqli_real_escape_string($conexao,$_POST['imagem']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$avaliacao = mysqli_real_escape_string($conexao,$_POST['avaliacao']);


$sql = "INSERT INTO livros (
    -- colocar exatamente como tá escrito os nomes das colunas da tabela no db
    nomeLivros,
    imagemLivros,
    descricaoLivros,
    avaliacaoLivros
) VALUES (
    --  devem estar na sequência exata 
    '{$nome}',
    -- '{$imagem}',
    '{$descricao}',
    '{$avaliacao}'
)";

mysqli_query($conexao,$sql) or die("Erro ao adicionar carro".mysqli_error(($conexao)));

echo "O carro {$nome} foi adicionado!"
?> 