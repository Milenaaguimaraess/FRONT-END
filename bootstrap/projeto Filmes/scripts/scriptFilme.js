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

lista_categorias.push(new Categoria('Grandes Animações!', 'images/card1_arcane.png', 'Aqui, você encontra animações que transcendem gerações e que são capazes de emocionar e encantar tanto crianças quanto adultos. Desde as produções que...', 'Arcane: league of legends'))

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

const film = [
['images/modal_guerra.png', 'Guerra Civil', 'Uma família luta pela sobrevivência enquanto uma guerra civil assola a América.', 'Diretor: Alex Garland'],
['images/modal2_alien.png', 'Alien: Romulus', 'Um grupo de jovens colonizadores espaciais se aventuram nas profundezas de uma estação espacial abandonada. Lá, eles descobrem uma forma de vida aterrorizante, forçando-os a lutar por sua sobrevivência.', 'Diretor: Fede Alvarez'],
['images/modal2_avatar.png', 'Avatar 2', 'Após formar uma família, Jake Sully e Ney`tiri fazem de tudo para ficarem juntos. No entanto, eles devem sair de casa e explorar as regiões de Pandora quando uma antiga ameaça ressurge, e Jake deve travar uma guerra difícil contra os humanos.', 'Diretor: James Cameron'],

]

  film.forEach(filme => {
    const div = document.createElement('div');
    div.id = 'fil'; // Evite duplicar IDs
    div.setAttribute('data-bs-toggle', 'modal');
    div.setAttribute('data-bs-target', '#myModal');
  
    div.innerHTML = `
        <img src="${filme[0]}" alt="">
        <h3>${filme[1]}</h3>
    `;
  
    div.addEventListener('click', () => {
      document.querySelector('#exampleModalLabel').innerText = `${filme[1]}`
    })
  
    div.addEventListener('click', () => {
        document.querySelector('.modal-body').innerHTML = `
            <img src="${filme[0]}" class="w-100">
            <h2>${filme[1]}</h2>
            <p>${filme[2]}</p>
            <p>${filme[3]}</p>
            `;
    });
  
    document.querySelector('#mural').appendChild(div);
  });