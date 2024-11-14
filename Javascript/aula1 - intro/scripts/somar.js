var n1 = prompt("Digite o primeiro número")
var n2 = prompt('Digite o segundo numero')

// Number() - transformar texto em número
var soma = Number(n1) + Number(n2)
alert("O resultado da soma é: " +soma)

// typeof -> no site (f12) ajuda a ver oq a var está guardando

// var_global é a var temporária
// var - global e sobrescrevivel
var variavel_global = 1
// let - local e sobrescrevivel
let variavel_local = 3
// const - global e sobrescrevivel
const variavel_constante =  "fixo"