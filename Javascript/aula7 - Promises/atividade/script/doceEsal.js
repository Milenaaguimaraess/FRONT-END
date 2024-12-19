
const lista = {
    'doce' : [
         {
            'Receita' : 'Brigadeiro',
            'Ingredientes' : '1 caixa de leite condensado; 7 colheres (sopa) de achocolatado ou 4 colheres (sopa) de chocolate em pó; 1 colher (sopa) de margarina sem sal e chocolate granulado.',
            'Modo de preparo' : 'Em uma panela funda, acrescente o leite condensado, a margarina e o chocolate em pó, Cozinhe em fogo médio e mexa até que o brigadeiro comece a desgrudar da panela e Deixe esfriar e faça pequenas bolas com a mão passando a massa no chocolate granulado.' 
         
            },
     ]
    }

     const resultado = lista.doce.map((elemento) => {
     document.querySelector('body').innerHTML += `
         <h3> ${elemento.nome}</h3>
     `
 })

 const list = {
    'salgado' : [
         {
            'Receita' : 'Fandangos Caseiro',
            'Ingredientes' : '2 xícaras de farinha de milho amarela, 1 xícara de água, 1/2 colher de sopa de manteiga,1/2 colher de chá de sal e 1 colher de chá de fermento químico (de bolo)',
            'Modo de preparo' : 'Em um recipiente, coloque a farinha de milho amarela e misture com o sal e o fermento em pó, Em seguida, adicione a manteiga, dê uma leve misturadinha e vá adicionando a água aos poucos até adquirir uma massa homogênea,Agora, com as mãos, vá pegando pequenas quantidades da massa e moldando os biscoitinhos do formato que desejar — você pode apertar levemente com o dedão, fazendo uma concha, ou moldar em formato de anéis. A massa pode parecer um pouco quebradiça, mas não se preocupe: vá fazendo delicadamente os formatos que dará certo! Em seguida, coloque os biscoitos separadamente na assadeira e leve ao forno preaquecido a 200º C por cerca de 10 minutos ou até os biscoitos estarem crocantes! Após isso, basta retirar do forno e finalizar com temperos de sua preferência! Fácil, fácil, né? Na hora de moldar o formato dos biscoitos, você ainda pode chamar a criançada para ajudar nessa tarefa e, literalmente, botar a mão na massa.' 
         
            },
     ]
    }

     const resultadoo = list.salgado.map((elemento) => {
     document.querySelector('body').innerHTML += `
         <h3> ${elemento.nome}</h3>
     `
 })

 const listaa = {
    'suco' : [
         {
            'Fruta' : 'Graviola',
            'Modo de preparo' : 'basta colocar em um liquidificador 1 xícara (de chá) de água gelada, filtrada ou fervida, e 1/2 xícara (de chá) de polpa de graviola sem sementes, e bater por 2 minutos ou até ficar uma bebida bem homogênea.'
            
            
         
            },
     ]
    }

     const resultad = listaa.suco.map((elemento) => {
     document.querySelector('body').innerHTML += `
         <h3> ${elemento.nome}</h3>
     `
 })