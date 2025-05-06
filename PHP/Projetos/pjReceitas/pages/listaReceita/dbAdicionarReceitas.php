<?php
// defende de comandos que podem alterar o db
$modelo = mysqli_real_escape_string($conexao,$_POST['titulo']);
$marca = mysqli_real_escape_string($conexao,$_POST['descricao']);
$valor = mysqli_real_escape_string($conexao,$_POST['receita']);
$ano = mysqli_real_escape_string($conexao,$_POST['autor']);
$cor = mysqli_real_escape_string($conexao,$_POST['categoria']);

$sql = "INSERT INTO carros (
    -- colocar exatamente como tá escrito os nomes das colunas da tabela no db
    tituloComida,
    descricaoComida,
    receitaTexto,
    autorComida,
    categoriaComida
) VALUES (
    --  devem estar na sequência exata 
    '{$titulo}',
    '{$descricao}',
    '{$receita}',
    '{$autor}',
    '{$categoria}'
)";

mysqli_query($conexao,$sql) or die("Erro ao adicionar carro".mysqli_error(($conexao)));

echo "A comida {$titulo} foi adicionado!"
?> 