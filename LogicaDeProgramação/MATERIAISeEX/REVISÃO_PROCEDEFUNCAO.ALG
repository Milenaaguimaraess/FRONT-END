Algoritmo "REVISÃO_procedEfuncao"
// diferença entre procedimento e função:
// o procedimento é visto como uma lista de etapas e a função tem como padrão
// a devolução de algo para o dev ou usuário
// no procedimento, se eu colocar um nome, quer dizer q eu vou chamar ela como uma palav. dedicada
Var
procedimento teste()
// É VISADO PARA RODAR ETAPAS
// dentro do procedimento, as var. são temporarias e
// fora,- as var. existiram o tempo todo
   var
   nome: caractere
   
  INICIO
  leia(nome)
  escreval(nome)
fimprocedimento

funcao nome() : caractere
       var
       primeiroNome , segundoNome : caractere
 INICIO
 leia(primeiroNome)
 leia(segundoNome)
 escreval("Nome")
 retorne primeiroNome , segundoNome
fimfuncao

Inicio
escreval(nome())

Fimalgoritmo