Algoritmo "EX_idade"


Var
idade:inteiro

procedimento Categoria(id: inteiro)
   inicio
   se(id >= 5) e (id <= 7) entao
     escreval ("Voc� pertence a categotia Infantil A!")
   fimSe
   
    se(id >= 8) e (id <= 11) entao
     escreval ("Voc� pertence a categotia Infantil B!")
   fimSe
   
    se(id >= 12) e (id <= 13) entao
     escreval ("Voc� pertence a categotia Juvenil A!")
   fimSe
   
    se(id >= 14) e (id <= 17) entao
     escreval ("Voc� pertence a categotia Juvenil B!")
   fimSe
   
    se(id >= 18) entao
     escreval ("Voc� pertence a categotia Adultos!")
   fimSe

fimprocedimento

Inicio
escreval("CLASSIFICA��O POR FAIXA ET�RIA")
escreval("Digite sua idade: ")
leia(idade)
Categoria(idade)

Fimalgoritmo