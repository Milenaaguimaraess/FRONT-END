Algoritmo "Correcao_EXinverso"
 //vetores
Var // i = var. contadora, tbm chamado de contador
i : inteiro
numero : vetor [1..5] de inteiro

Inicio
para i de 1 ate 5 faca
     leia(numero[i]) //sempre declarar um item q existe, n dá pra chamar o numro 6 se ele n tem no [i]
fimpara

para i de 5 ate 1 passo -1 faca
     escreval(numero[i])
fimpara


fimalgoritmo