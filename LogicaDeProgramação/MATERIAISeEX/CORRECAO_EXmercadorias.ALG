Algoritmo "Correcao_EXmercadorias"

Var
i : inteiro
nomeProduto: vetor[1..3] de caractere
valor: vetor[1..3] de real
valorTotal , media : real
valorProduto : real

Inicio
para i de 1 ate 3 faca
     escreval("Digite o nome do produto : ")
     leia(nomeProduto[i])
     escreval("Digite o valor do produto  ", nomeProduto[i], ": R$")
     leia(valor[i])
     limpatela()
     
     valorTotal <- valorTotal + valor[i]
fimpara

       media <- valorTotal / 3
       
escreval("----------")
escreval("----LOJA----")
escreval("*VALOR TOTAL DE R$",valorTotal)
escreval("MEDIA DE PRODUTO R$",media:2:2)

para i de 1 ate 3 faca
escreval(i, "° - ", nomeProduto[i], " = R$ ", valor[i])
fimpara

escreval("--------")

Fimalgoritmo