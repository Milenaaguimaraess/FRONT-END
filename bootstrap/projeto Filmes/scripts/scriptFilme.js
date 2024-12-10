lista_categorias = []

class Categoria {
    constructor(titulo, img, desc, marca) {
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('Filmes do momento', 'images/card1_jogos.png', 'Seja em grandes blockbusters ou em filmes independentes, o foco aqui é apresentar as histórias, gêneros e diretores que estão dominando as bilheteiras e as...', 'Jogos Vorazes: a esperança'))

lista_categorias.push(new Categoria('Grandes Animações!', 'images/card1_arcane.png', 'Aqui, você encontra filmes que transcendem gerações e que são capazes de emocionar e encantar tanto crianças quanto adultos. Desde as produções que...', 'Arcane: league of legends'))

lista_categorias.push(new Categoria('Explore novas categorias', 'images/card1_hered.png', 'Aqui, você encontra os filmes mais assustadores e perturbadores, capazes de prender a atenção e causar calafrios. Seja com histórias sobrenaturais, criaturas...', 'Hereditátio'))

lista_categorias.forEach(categoria => {
    document.querySelector('#categoriaItems').innerHTML += `
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="${categoria.img}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">${categoria.titulo}</h5>
                    <p class="card-text">${categoria.desc}</p>
                    <p class="card-text"><small class="text-body-secondary">${categoria.marca}</small></p>
                </div>
            </div>
        </div>
    </div>
    `
});