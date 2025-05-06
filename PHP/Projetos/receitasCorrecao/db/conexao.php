<?php
include("config.php");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO)
 or Die("Erro na conexão do banco".mysqli_connect_error());
?>