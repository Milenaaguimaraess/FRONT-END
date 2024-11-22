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

function carregarCatalogo(){
    var livros = [
        "images/81O+VCUMudL._AC_UF1000,1000_QL80_.jpg"
    ]
}


// quantidades de livros p/ n ter q ficar repetindo o msm bloco de código o tempo todo
// 6 é a quant. de livros q quero na tela( no meucatalogo)
// usei o flex wrap no css pra olocar o conteudo em colunas
function carregarCatalogo(){
    for (let i = 0;i < 6;i++)
        document.getElementById('catalogo').innerHTML += `
    <div class="livro">
        <img src= alt="">
            <h4>Corte de Nevoa e Fúria</h4>
                
        <button>
            Resumo
            <img src="images/icons/plus.svg" alt="">
        </button>
    </div>
    
    `
}

carregarCatalogo()