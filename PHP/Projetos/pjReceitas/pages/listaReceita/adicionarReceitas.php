<h2>INCLUA UMA NOVA RECEITA</h2>

<form action="index.php?menu=dbAdicionarReceita" method="post">
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="descricao">Ingredientes</label>
        <input type="text" id="marca" name="marca">
    </div>
    <div class="form-group">
        <label for="receita">Modo de Preparo</label>
        <input type="text" id="receita" name="receita">
    </div>
    <div class="form-group">
        <label for="Autor">Autor</label>
        <input type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" id="categoria" name="categoria">
    </div>
    <button type="submit">CADASTRAR</button>
</form>