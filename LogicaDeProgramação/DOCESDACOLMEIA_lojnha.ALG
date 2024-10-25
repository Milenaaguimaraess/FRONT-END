Algoritmo "DocesDaColmeia_lojinha"
// comprar por quilo - bolo
// desconto (desconto por situação, vai depender da compra)
// quatidade de unidades- docinhos

Var
opcao: caractere
valorTotal: real


Inicio
escreval("*******CATALOGO*******")
escreval("1 - Trufa              R$ 8,00")
escreval("2 - Bolo no pote       R$ 10,00")
escreval("3 - Copo da Felicidade R$ 15,00")
escreval("4 - Docinho            R$ 3,00")
escreval("5 - Pudim              R$ 25,00")
escreval("6 - Cancelar")
escreval("7 - Carrinho")

leia (opcao)

// switch / case - escolha caso
 escolha (opcao)
  caso "1"
    escreval ("item TRUFA X 1 adicionado!")
    valorTotal <- valorTotal + 8,00
    escreval ("Valor Total do carrinho R$:", valorTotal)
  caso "2"
    escreval ("item BOLO NO POTE X 1 adicionado")
    valorTotal <- valorTotal + 10,00
    escreval ("Valor Total do carrinho R$:", valorTotal)

  caso "3"
    escreval ("item COPO DA FELICIDADE X 1 adicionado")
    valorTotal <- valorTotal + 15,00
    escreval ("Valor Total do carrinho R$:", valorTotal)
  caso "4"
    escreval ("item DOCINHO X 1 adicionado")
    valorTotal <- valorTotal + 3,00
    escreval ("Valor Total do carrinho R$:", valorTotal)
  caso "5"
    escreval ("item PUDIM X 1 adicionado")
    valorTotal <- valorTotal + 25,00
    escreval ("Valor Total do carrinho R$:", valorTotal)
  caso "6"
    escreval ("Compra Cancelada! :(")

  
    
 fimescolha

Fimalgoritmo