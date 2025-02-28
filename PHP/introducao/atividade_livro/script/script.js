function testes(){
    
    contador = 0
    
    for(var i = 0;i < 3;i++){
        alert(`QUE LEGAL! fiz ${i+1} vezes`)
        }
    }
    
    function carregarCatalogo(){
        var livros = [
            ["images/livros/acotar.jpg", 'Corte de Nevoa e Fúria', 'Sarah J. Maas','À medida que Feyre é atraída para a sombria teia política e passional de Rhysand, uma guerra iminente aproxima-se e um mal muito mais perigoso do que qualquer rainha ameaça destruir tudo o que Feyre alguma vez tentou proteger.'],
           
        ]
       
        livros.forEach(cadaLivro =>{
            document.getElementById('catalogo').innerHTML += `
        <div class="livro">
            <img src="${cadaLivro[0]}" alt="">
                <h4>${cadaLivro[1]}</h4>
                <h5>${cadaLivro[2]}</h5>
                <p>${cadaLivro[3]}</p
                    
            <button>
                Resumo
                <img src="images/icons/plus.svg" alt="">
            </button>
        </div>
        
        `
    })
    
    }
    
    carregarCatalogo()