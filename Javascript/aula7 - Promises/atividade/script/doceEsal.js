
const lista = {
    'doce' : [
         {
             'Receita' : 'Brigadeiro',
             'Ingredientes' : '1 caixa de leite condensado; 7 colheres (sopa) de achocolatado ou 4 colheres (sopa) de chocolate em pó; 1 colher (sopa) de margarina sem sal e chocolate granulado.'
         },
     ]
    }

     const resultado = lista.doce.map((elemento) => {
     document.querySelector('body').innerHTML += `
         <h3> ${elemento.nome}</h3>
     `
 })