<?php
    $id=$_GET['idComida'];
    echo "Essa é a receita de N° $id";

    $sql="SELECT * FROM receitas WHERE idComida = {$id}";
    $query = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta".mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($query);

?>

    <h2>EDITAR RECEITA</h2>

<form action="index.php?menu=dbEditarReceita" method="post">
<div class="form-group">
        <label for="idComida">N°</label>
        <input value="<?=$id?>" type="text" id="idComida" name="idComida">
    </div>
    <div class="form-group">
        <label for="titulo">Título</label>
        <input value="<?=$dados['tituloComida']?>" type="text" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="descricao">Ingredientes</label>
        <input value="<?=$dados['descricaoComida']?>" type="text" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="receita">Modo de Preparo</label>
        <input value="<?=$dados['receitaTexto']?>" type="text" id="receita" name="receita">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input value="<?=$dados['autorReceita']?>"type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input value="<?=$dados['CategoriaReceita']?>" type="text" id="categoria" name="categoria">
    </div>
    <button type="submit">Editar</button>
</form>