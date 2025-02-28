function testes(){
    
    contador = 0
    
    for(var i = 0;i < 3;i++){
        alert(`QUE LEGAL! fiz ${i+1} vezes`)
        }
    }
    
    function carregarCatalogo(){
        var livros = [
            ["images/livros/acotar.jpg", 'Corte de Nevoa e Fúria'],
           
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