// promisse é uma promessa!
// resolve -cumprimos a promessa
// Reject - 'Rejeitamos' a promessa, ou não cumpriu!
// trabalhar c/ promessas tbm tem q trabalhar com 'porque'
// FULLFILLED - 'Promessa cumprida!'
// REJECTED - 'promessa rejeitada!'
// PROMISERESULT - o motivo do status
// PROMISESTATE - estado da promessa

const promessa = new Promise((resolve, reject) => {
    // => signifiva que é uma função anônima
    let nome = 'Milena'

    if(nome == 'Milena'){
        // resolve('Usuário é Milena')
        resolve({'adm':'Milena'})
        // function alert(){
        //         alert()oi
        // }
        // resolve (alert)())
    }else{
        reject('Porque o usuárionão é a MIlena')
    }    
})

//  then - espera o resolve e retorna o que o resolve tiver,
// caso reject acusa um erro
//  'THEN ESPERA QUE DÊ CERTO'
promessa.then((dadosDoResolve) =>{
    console.log(dadosDoResolve)
})

// catch - espera o reject e retorna o que o reject tiver, caso
//  resolve ele não executa 
// 'CATCH ESPERA QUE DÊ ERRRADO!'
promessa.catch((infoDoErro) => {
    console.log(indoDoErro)
})

function sujeitoDemorado(){
    return new Promise((resolve) => {
        setTimeout(()=> {
            console.log('Rodando')
            resolve()
        },2000)
    })
}

async function carregandoConteudo(){
    console.log('oi')
    await sujeitoDemorado()
    console.log('TERMINEI')
}

carregandoConteudo()



