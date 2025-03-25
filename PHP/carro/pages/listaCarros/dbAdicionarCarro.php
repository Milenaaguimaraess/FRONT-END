<!-- esse arquivo é apenas para incluir os dados no db -->
<!-- <h1>você adicionou um novo carro!</h1> -->

<?php
// defende de comandos que podem alteral o db
$modelo = mysqli_real_escape_string($conexao,$_POST['modelo']);
$marca = mysqli_real_escape_string($conexao,$_POST['marca']);
$valor = mysqli_real_escape_string($conexao,$_POST['valor']);
$ano = mysqli_real_escape_string($conexao,$_POST['ano']);
$cor = mysqli_real_escape_string($conexao,$_POST['cor']);

$sql = "INSERT INTO carros (
    -- colocar exatamente como tá escrito os nomes das colunas da tabela no db
    modeloCarro,
    marcaCarro,
    valorCarro,
    anoCarro,
    corCarro
) VALUES (
    --  devem estar na sequência exata 
    '{$modelo}',
    '{$marca}',
    '{$valor}',
    '{$ano}',
    '{$cor}'
)";

mysqli_query($conexao,$sql) or die("Erro ao adicionar carro".mysqli_error(($conexao)));

echo "O carro {$modelo} foi adicionado!"
?> 
