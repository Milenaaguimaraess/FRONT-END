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
 // o comando escreva � compat�vel ao reterno, ou seja, output

escreval ("Digite o seu email:")
leia (email)
limpatela ()

escreval ("Cadastro efetuado com sucesso!")
escreval ("****************")
escreval ("Usuario : ",nome) // isso foi uma concatena��o, pra maquina entender q � praa fazer as duas coisas
//concatena��o: juntar as variaveis, ao inves de ficar esccrevendo uma por uma
escreval ("Idade : ",idade)
escreval ("email : ",email)
escreval ("*****************")


Fimalgoritmo