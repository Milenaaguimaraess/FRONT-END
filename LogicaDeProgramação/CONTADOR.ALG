Algoritmo "contador"

Var
contador , contador2 , contador3: inteiro
 // while/ enquanto para repeti�oes mais complicadas
 // for/para � para repeti��es mais simples
// repita / repeti��o          q vai esperar o negativo
Inicio
enquanto (contador <= 10) faca
// condi��o s�o os ()
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
escreval("REPITA (DO UNTIL)") // until executa pelo menos uma vez msm q d� errado
repita                        // until recebe o falso
      escreval(contador3)
      contador3 <- contador3 +1
ate(contador3 = 11) // � como se fosse o fim do repita

Fimalgoritmo