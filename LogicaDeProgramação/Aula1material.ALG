Algoritmo "semnome"
// Aula 1
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 23/10/2024
Var
// Se��o de Declara��es das vari�veis 
nome: caractere //var. global significa q pode ser acessada por todo mundo
// inteiro, caractere, real, vetor, logico (s�o valores q podemos estar salvando desses dados
NUmero_inteiro: inteiro // regras de var: n pode acentos (nos coment�rios pode ter),
Numero_quebrado: real
ListaDeElementos: vetor[1..3] de caractere
ligado: logico
// Regras das variaveis
// 1- n�o pode acento
// 2- n pode espa�o pois as palavras compostas ou q s�o duas palavras n precisa usar o _
//(que � chamado de camelcase, camelo; snakecase, cobra) para que n�o seja um comando
// 3- N�o pode palavras dedicadas(palavras que s�o usadsa para programar; macete: ficou azul, � palavra dedicada)
// 4- n�o pode n�mero em inicio da var.
teste1: caractere
// 5- n�o posso colocar caracteres especiais (emoji, �, ?, !, (), etc) como nomes de var.

//Boas pr�ticas para as var.:
//1- n�o come�ar com MAIUSCULO
//2- evitar nomes de vari�veis pouco descritivos ou com coisas aleat�rias


Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Escreval ("Ol� mundo") // apertar a tecla f9 para ver a execu��o; palavras dedicadas (comando dentro da m�quina que j� ser� adaptada;
// usar () para escrever; usar "" para caracteres, para a m�quina saber q n � comando nem fun��o
escreval ("Meu nome � Milena") // Apertar ctrl s para j� ir salvando
// devemos ser bem descritivo para a m�quina; usar o l no final para quebrar alinha
escreval(3+3*8/2)

teste1 <- "Olha que legaaaal" // <- recebeler vai coletar a info e guardar na mem�ria
escreval (teste1)
leia (nome)
  
  
Fimalgoritmo