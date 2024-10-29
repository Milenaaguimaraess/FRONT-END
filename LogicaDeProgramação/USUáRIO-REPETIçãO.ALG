Algoritmo "Usuário-repetição"

Var
usuarioC , senhac , usuario,senha , login: caractere

procedimento login()
INICIO
fimprocedimento

Inicio
usuarioC <- "adm"
senhac <- "umasenhalegal"

enquanto (login = "") faca //(ou while) tipo de repetição que sempre vai espertar o vr positivo
    escreval("Digite usuario: ")
    leia(usuario)
    escreval("Digite Senha: ")
    leia(senha)
    limpatela()

 // quando a condição for favorável, ele vai executar, sen, ele n vai
//cuidado com o loop infinito, deve-se colocar uma regrar para quebrar a condição, por isso precisa de um controlador
  // ctrl = f2 pra dar um help quando cai no loop infinito
  // ou esc
  // controller - controlador (fará o trem n ser executado novamente)
  se (senha = senhaC) e (usuario = usuarioC) entao
  //interrompa(break) - quebra a repetição
  login <- "correto"
fimse
fimenquanto
limpatela()
Escreval("Login efetuado com sucesso!")
  
Fimalgoritmo