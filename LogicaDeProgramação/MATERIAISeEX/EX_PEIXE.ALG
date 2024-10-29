Algoritmo "EX_PEIXE"

Var
P , Exc , M : real // peso de peixe



Inicio
escreval("Qual a quantidade de peixes em Kg?")
leia(P)
limpatela()

se(P > 50) então
   escreval("Você terá que pagar multa pelo excesso de peso")
     Exc <- (P - 50)
      M <- Exc * 4
   escreval("a multa é de R$ ", M)
senao
escreval("Você não paga multa!")

fimse




Fimalgoritmo
