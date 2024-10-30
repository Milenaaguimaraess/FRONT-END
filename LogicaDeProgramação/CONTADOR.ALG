Algoritmo "contador"

Var
contador , contador2 , contador3: inteiro
 // while/ enquanto para repetiçoes mais complicadas
 // for/para é para repetições mais simples
// repita / repetição          q vai esperar o negativo
Inicio
enquanto (contador <= 10) faca
// condição são os ()
     escreval(contador)
     contador <- contador +1
fimenquanto

//for
escreval("PARA (FOR)")
 escreval("---------")
para contador2 <- 1 ate 10 passo 1 faca
     escreval(contador2)
fimpara

//repita equivale ao until
escreval("-------")
escreval("REPITA (DO UNTIL)") // until executa pelo menos uma vez msm q dê errado
repita                        // until recebe o falso
      escreval(contador3)
      contador3 <- contador3 +1
ate(contador3 = 11) // é como se fosse o fim do repita

Fimalgoritmo