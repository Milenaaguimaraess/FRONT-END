Algoritmo "EX_PEIXE"

Var
P , Exc , M : real // peso de peixe



Inicio
escreval("Qual a quantidade de peixes em Kg?")
leia(P)
limpatela()

se(P > 50) ent�o
   escreval("Voc� ter� que pagar multa pelo excesso de peso")
     Exc <- (P - 50)
      M <- Exc * 4
   escreval("a multa � de R$ ", M)
senao
escreval("Voc� n�o paga multa!")

fimse




Fimalgoritmo
