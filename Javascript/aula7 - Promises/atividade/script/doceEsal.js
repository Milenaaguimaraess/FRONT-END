// const lista = {
//     'doce' : [
//          {
//              'nome' : 'Ilha do medo',
//              'Ingredientes' : '1 caixa de leite condensado; 1 caixa de leite condensado; 1 colher (sopa) de margarina sem sal e chocolate granulado',
//              'Modo de Preparo' : 'Lorem'
//          },
//          {
//              'nome' : 'Bruxa de blair',
//              'Desc' : 'lorem'
//          },
//      ],
//      'salgado' : [
//          {
//              'nome' : 'Roblox',
//              'Desc' : 'lorem'
//          },
//          {
//              'nome' : '',
//              'Receita' : ''
//          }    
//      ],
//      'Suco' : [
//         {
//             'nome' : 'Roblox',
//             'Desc' : 'lorem'
//         },
//         {
//             'nome' : '',
//             'Receita' : ''
//         }    
//     ]
//  }
 
//  const resultadoo = lista.doce.map((elemento) => {
//      document.querySelector('body').innerHTML += `
//          <h3> ${elemento.nome}</h3>
//      `
//  })

//  const resultado = lista.salgado.map((elemento) => {
//     document.querySelector('body').innerHTML += `
//         <h3> ${elemento.nome}</h3>
//     `
// })

// const resultad = lista.salgado.map((elemento) => {
//     document.querySelector('body').innerHTML += `
//         <h3> ${elemento.nome}</h3>
//     `
// })

const lista = {
    'filme' : [
         {
             'nome' : 'Ilha do medo',
             'Desc' : 'Lorem'
         },
     ]
    }

     const resultado = lista.filme.map((elemento) => {
     document.querySelector('body').innerHTML += `
         <h3> ${elemento.nome}</h3>
     `
 })