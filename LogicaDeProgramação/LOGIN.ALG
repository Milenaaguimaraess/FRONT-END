Algoritmo "login"

Var
senha , senhaC , email , emailC: caractere
// senhaC: senha cadastrada

Inicio
senhaC <- "1234"
emailC <- "emailsenaitopti@gmail.com"

escreval ("Qual é o seu Email:")
leia (email)
escreval ("Qual é a sua senha:")
leia(senha)

se(senha = senhaC) e (email = emailC)então // podemos usar o ou que significa q pode ser um ou o outro
         escreval("Login efetuado com sucesso! Sextamos :3")
senao()
       escreval("Usuário ou senha incorretor! Tente novamente :(")
fimse


Fimalgoritmo