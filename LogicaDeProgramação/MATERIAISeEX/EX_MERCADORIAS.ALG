Algoritmo "EX_mercadorias"

Var
mercadoria: vetor [1..3] de caractere
i : inteiro
soma , total : real
valor : vetor [1..3] de real

Inicio

escreval("-----LISTA DE MERCADORIAS EM ESTOQUE-----")
para i de 1 ate 3 faca
     escreval("Digite o nome das mercadorias: ")
     leia(mercadoria[i])
fimpara
limpatela()

escreval("-----LISTA DE MERCADORIAS EM ESTOQUE-----")
para i de 1 ate 3 faca
     escreval("Digite o valor em KG da mercadoria: " , mercadoria[i])
     leia(valor[i])

fimpara
     total <- valor[1] + valor[2] + valor[3]
     escreval(valor[1], "+", valor[2], "+", valor[3], " =", total)
     escreval("A média do valor das mercadorias em estoque é", total/3)
      
      
Fimalgoritmo