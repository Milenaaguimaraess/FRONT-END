Algoritmo "Usu�rio-repeti��o"

Var
usuarioC , senhac , usuario,senha , login: caractere
Inicio
usuarioC <- "adm"
senhac <- "umasenhalegal"

enquanto (login = "") faca //(ou while) tipo de repeti��o que sempre vai espertar o vr positivo
    escreval("Digite usuario: ")
    leia(usuario)
    escreval("Digite Senha: ")
    leia(senha)
    limpatela()
    
 // quando a condi��o for favor�vel, ele vai executar, sen, ele n vai
//cuidado com o loop infinito, deve-se colocar uma regrar para quebrar a condi��o, por isso precisa de um controlador
  // ctrl = f2 pra dar um help quando cai no loop infinito
  // ou esc
  // controller - controlador (far� o trem n ser executado novamente)
  se (senha = senhaC) e (usuario = usuarioC) entao
  //interrompa(break) - quebra a repeti��o
  login <- "correto"
fimse
fimenquanto
limpatela()
Escreval("Login efetuado com sucesso!")
  
  
Fimalgoritmo