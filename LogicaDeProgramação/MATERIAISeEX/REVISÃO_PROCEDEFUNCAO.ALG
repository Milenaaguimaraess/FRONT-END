Algoritmo "REVIS�O_procedEfuncao"
// diferen�a entre procedimento e fun��o:
// o procedimento � visto como uma lista de etapas e a fun��o tem como padr�o
// a devolu��o de algo para o dev ou usu�rio
// no procedimento, se eu colocar um nome, quer dizer q eu vou chamar ela como uma palav. dedicada
Var
procedimento teste()
// � VISADO PARA RODAR ETAPAS
// dentro do procedimento, as var. s�o temporarias e
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