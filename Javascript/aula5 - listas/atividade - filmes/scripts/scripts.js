function carregarCatalogo(){
    var livros = [
        ["images/livros/acotar.jpg", 'Como treinar seu dragão'],
        ['images/livros/quartaAsa.jpg', 'Coraline'],
        ['images/livros/peagogia1.jpg', 'A viagem de Chihiro'],
        ['images/livros/metamorfose.jpg', ''],
        ['images/livros/revolucao.jpg', ''],
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