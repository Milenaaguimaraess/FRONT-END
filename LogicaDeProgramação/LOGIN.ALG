Algoritmo "login"

Var
senha , senhaC , email , emailC: caractere
// senhaC: senha cadastrada

Inicio
senhaC <- "1234"
emailC <- "emailsenaitopti@gmail.com"

escreval ("Qual � o seu Email:")
leia (email)
escreval ("Qual � a sua senha:")
leia(senha)

se(senha = senhaC) e (email = emailC)ent�o // podemos usar o ou que significa q pode ser um ou o outro
         escreval("Login efetuado com sucesso! Sextamos :3")
senao()
       escreval("Usu�rio ou senha incorretor! Tente novamente :(")
fimse


Fimalgoritmo