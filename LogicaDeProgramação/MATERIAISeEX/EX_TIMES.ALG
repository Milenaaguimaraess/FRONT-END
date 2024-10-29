Algoritmo "EX_times"

Var
time1 , time2: caractere
gols1 , gols2: inteiro

Inicio
escreval("Qual o nome do primeiro time?")
leia(time1)
escreval("Qual o nome do segundo time?")
leia(time2)
limpatela()

escreval("Quantos gols fez o time1?")
leia(gols1)

escreval("Quantos gols fez o time2?")
leia(gols2)
limpatela()

se (gols1 > gols2)entao
   escreval(time1, " é o vencedor da partida!")
 fimse
 
se(gols1 < gols2)entao
   escreval(time2, " é o vencedor da partida!")
fimse

se(gols1 = gols2)então
   escreval("Houve um empate!")

fimse

Fimalgoritmo