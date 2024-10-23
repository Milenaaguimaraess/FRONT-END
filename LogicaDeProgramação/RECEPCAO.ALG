Algoritmo "recepcao"

Var
nome, email: caractere // ambos usam o caractere, ent pode deixar assim ou  colocar na linha
idade: inteiro

Inicio
escreval ("Boa tarde! Digite o seu nome:")
leia (nome)
limpatela ()

escreval ("Digite sua idade")
leia (idade) // o comando se refere sempre ao input
 // o comando escreva é compatível ao reterno, ou seja, output

escreval ("Digite o seu email:")
leia (email)
limpatela ()

escreval ("Cadastro efetuado com sucesso!")
escreval ("****************")
escreval ("Usuario : ",nome) // isso foi uma concatenação, pra maquina entender q é praa fazer as duas coisas
//concatenação: juntar as variaveis, ao inves de ficar esccrevendo uma por uma
escreval ("Idade : ",idade)
escreval ("email : ",email)
escreval ("*****************")


Fimalgoritmo