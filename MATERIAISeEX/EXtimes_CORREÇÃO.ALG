Algoritmo "EXtimes_CORREÇÃO"

Var  // ler é a entrada de dados
time1 , time2: caractere
golstime1 , golstime2: inteiro

Inicio
// é bom montar um roteiro, pq ficar indo e voltando atrapalha o algoritmo
//entrada = nome dos 2 times e gols
//processo = comparar numero de gols, se a qntd for igual será um empate
//saida = escrever o nome do vencedor ou o empate

escreval("***COPA DO MUNDO***")
escreval("Digite o nome do primeiro time: ")
leia(time1)
escreval("Digite a quantidade de gols do time ", time1)//houve uma concatenação nesse final
leia(time1)
limpatela()

escreval("Digite o nome do segundo time: ")
leia(time1)
escreval("Digite a quantidade de gols do time ", time2)
leia(time2)
limpatela()

se(golstime1 > golstime2) entao
   escreval("O time", time1, "é vencedor! Saldo de gols", golstime1)

fimse
   
se(golstime1 < golstime2) entao
   escreval("O time", time2, "é vencedor! Saldo de gols", golstime2)
   
   senao
   escreval("EMPATE")
 fimse
Fimalgoritmo