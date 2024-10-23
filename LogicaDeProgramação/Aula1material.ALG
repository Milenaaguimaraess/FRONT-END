Algoritmo "semnome"
// Aula 1
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 23/10/2024
Var
// Seção de Declarações das variáveis 
nome: caractere //var. global significa q pode ser acessada por todo mundo
// inteiro, caractere, real, vetor, logico (são valores q podemos estar salvando desses dados
NUmero_inteiro: inteiro // regras de var: n pode acentos (nos comentários pode ter),
Numero_quebrado: real
ListaDeElementos: vetor[1..3] de caractere
ligado: logico
// Regras das variaveis
// 1- não pode acento
// 2- n pode espaço pois as palavras compostas ou q são duas palavras n precisa usar o _
//(que é chamado de camelcase, camelo; snakecase, cobra) para que não seja um comando
// 3- Não pode palavras dedicadas(palavras que são usadsa para programar; macete: ficou azul, é palavra dedicada)
// 4- não pode número em inicio da var.
teste1: caractere
// 5- não posso colocar caracteres especiais (emoji, ç, ?, !, (), etc) como nomes de var.

//Boas práticas para as var.:
//1- não começar com MAIUSCULO
//2- evitar nomes de variáveis pouco descritivos ou com coisas aleatórias


Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
Escreval ("Olá mundo") // apertar a tecla f9 para ver a execução; palavras dedicadas (comando dentro da máquina que já será adaptada;
// usar () para escrever; usar "" para caracteres, para a máquina saber q n é comando nem função
escreval ("Meu nome é Milena") // Apertar ctrl s para já ir salvando
// devemos ser bem descritivo para a máquina; usar o l no final para quebrar alinha
escreval(3+3*8/2)

teste1 <- "Olha que legaaaal" // <- recebeler vai coletar a info e guardar na memória
escreval (teste1)
leia (nome)
  
  
Fimalgoritmo