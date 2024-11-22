// var fruta1 = 'Melancia'
// var fruta2 = 'Tomate'
// var fruta3 = 'Melão'
// var fruta4 = 'Maracujá'
// var fruta5 = 'Mexerica'

// lista é a msm coisa q vetor o portugol
fruta = ['Melancia', 'Tomate', 'Melão', 'Maracujá', 'Mexerica']

teste = Array()
teste[0] = 'olha'
teste[1] = 'que'
teste[2] = 'top'

console.log(fruta)
console.log(fruta[1])

// push 'empurrar' - adicionar na lista
fruta.push('uva')
console.log(fruta)

// unshift - adicionar no começo da lista
fruta.unshift('Abacate')
console.log(fruta)

// pop - remove o ultimo
fruta.pop()
console.log(fruta)

//shift - remover o primeiro
fruta.shift()
console.log(fruta)

// splice - remove, adiciona e atualiza
// onde?? (indice), quantos vou deleter?? e 
// se n vou deletar nada, o que vou adicionar??
fruta.splice(2,3)
fruta.splice(2,0, 'Morango')
fruta.splice(1,1, 'Maracujá')
console.log(fruta)

fruta.push('Abacaxi')

alert(fruta.lenght)

for(var i=0;i<  fruta.lenght;i++){
    document.getElementById('resposta').
    innerHTML += `
    ${fruta[i]}`

}

//aqui no senai, esse trem só funcionou (mais ou menos) dps q coloquei o forEach 
fruta.forEach(cadaFruta => {
    document.getElementById('resposta').
    innerHTML += `
    ${cadaFruta} <br>
    `   
});



