function testes(){
// enquanto condicao faca
//para de n até n faca

contador = 0
//while(contador < 3){
//    alert(`QUE LEGAL! fiz ${contador+1} vezes`)
//    contador++
// }

for(var i = 0;i < 3;i++){
    alert(`QUE LEGAL! fiz ${i+1} vezes`)
    }
}

//testes()

// quantidades de livros p/ n ter q ficar repetindo o msm bloco de código o tempo todo
// 6 é a quant. de livros q quero na tela( no meucatalogo)
// usei o flex wrap no css pra olocar o conteudo em colunas
function carregarCatalogo(){
    var livros = [
        ["images/livros/acotar.jpg", 'Corte de Nevoa e Fúria'],
        ['images/livros/quartaAsa.jpg', 'Quarta Asa'],
        ['images/livros/peagogia1.jpg', 'Pedagogia do Oprimido'],
        ['images/livros/metamorfose.jpg', 'A metamorfose'],
        ['images/livros/revolucao.jpg', 'A revolução dos Bichos'],
        ['images/livros/BmeiaNoite.jpg', 'A biblioteca Da Meia-Noite'],
        ['images/livros/daisy.jpg', 'Daisy Jones and The Six: Uma história de amor e música'],
        ['images/livros/papoula.jpg', 'Guerra da Papoula' ],
        ['images/livros/fauno.jpg', 'O labirinto do fauno' ],
        ['images/livros/dante.jpg', 'Aristóteles e Dante descobrem os segredos do Universo: 1' ],
        ['images/livros/semantic.jpg', 'Semantic Error: Livro 2' ],
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