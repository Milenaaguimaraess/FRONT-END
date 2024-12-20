lista_categorias = []

class Categoria {
    constructor(titulo, img, desc, marca) {
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('Uma bebida para cada momento', 'images/card1.png', 'Do melhor fornecedor para o melhor cliente', 'Usufrua de um bom drink com a Deliflow!'))

lista_categorias.push(new Categoria('Peça sua favorita!', 'images/card3.png', 'Confira nosso menu de bebidas exclusivas e as mais bombásticas.', 'Menu de bebidas'))

lista_categorias.push(new Categoria('Para todos gostos.', 'images/card2.png', 'Buscamos atender a todos os requisitos de nossos clientes.', 'Proibido o comércio para menores de idade'))

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