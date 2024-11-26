function carregarCatalogo(){
    var livros = [
        ["images/como_treinar_o_seu_dragao_1_capa.jpg", 'Como treinar seu dragão'],
        ['images/coraline.jpg', 'Coraline'],
        ['images/chiriro.jpg', 'A viagem de Chihiro'],
        ['images/duna.jpg', 'Duna'],
        ['images/dungeon.jpg', 'Dungeons & Dragons'],
        ['images/livros/BmeiaNoite.jpg', ''],
    ]
   
    livros.forEach(cadaLivro =>{
        document.getElementById('catalogo').innerHTML += `
    <div class="livro">
        <img src="${cadaLivro[0]}" alt="">
            <h4>${cadaLivro[1]}</h4>
                
        <button>
            Resumo
            <img src="images/icons/plus.svg" alt="">
        </button>
    </div>
    
    `
})

}

carregarCatalogo()