function explicacao1(){
    escolha = confirm("DESEJA RODAR TRUE OR FALSE?")
    alert(escolha)
    // SE CONDICAO / SENAO
    if (escolha) {
        // se colocar o true, vai rodar o se, se colocar false, vai rodar o senao
       // alert('FIZ O SE')
       console.log("fiz o se")
       alert("VOCE ESCOLHEU O TRUE")
    }else{
        // alert("SENAO")
        console.log("senao")
        alert('VOCÊ ESCOLHEU FALSE')
    }
}

function explicacao2(){
    alert('SEJA BEM VINDO À LOJINHA!!')
    escolha = prompt('A) Bolo no pote R$ 10, B)Açaí R$ 20, C) Torta R$15')

    switch(escolha) {
        case "A":
            alert('Você escolheu bolo no pote')
            break 
        case 'B':
            alert('Você escolheu Açaí')
            break
        case "C":
            alert('Você escolheu Torta')
            break
    }
// o break quebra a leitura do código
}

function explicacao3(){
   // idade = parseInt() -> só número inteiros
   // idade = parseFloat -> só numeros quebrados
   idade = Number(prompt('Digite a sua idade:'))
  
   if(idade >= 18){
    // document -> documento html
    // queryselector -> "buscador"
    // interhtml -> "dentro do elemento"
    alert('Seja bom vido ao website!')
    document.querySelector('body').innerHTML = 'Viva!!'

   }else{
    alert('Idade inválida!')
    window.location = "https://www.google.com"
    // window -> janla
    // location -> "url"
   }

}