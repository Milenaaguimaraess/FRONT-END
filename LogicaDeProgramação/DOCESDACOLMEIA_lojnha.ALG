Algoritmo "DocesDaColmeia_lojinha"
// comprar por quilo - bolo
// desconto (desconto por situação, vai depender da compra)
// quatidade de unidades- docinhos

Var
opcao , FinalizarCarrinho , opcaoFinalizar: caractere
valorTotal: real
 //inicio adicionar carrinho
procedimento AdicionarAoCarrinho(vp: real) // valor do produto: vp (é uma var temporária (adicionar))

   var
   nomep: caractere

INICIO
   limpatela()
   escreval("Digite o nome do produto: ")
   leia(nomep)
  escreval ("item " , nomep , " adicionado!")
  valorTotal <- valorTotal + vp
  escreval ("Valor Total do carrinho R$:", valorTotal)
   
fimprocedimento
//fim AdicionarCarrinho

Inicio
FinalizarCarrinho <- "N"
enquanto (FinalizarCarrinho = "N") faca
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
        AdicionarAoCarrinho(8)
     caso "2"
        AdicionarAoCarrinho(10)
     caso "3"
        AdicionarAoCarrinho(15)
     caso "4"
        AdicionarAoCarrinho(3)
     caso "5"
        AdicionarAoCarrinho(25)
     caso "6"
       escreval ("Compra Cancelada! :( ")
      outrocaso
        escreval("Opção inválida!")

   // 28/10/2024 - REFATORAÇÃO E FRAÇÃO

   // quando trabalha com funções, é pré-programado uma palavra específica/personalizada

   //30/10/2024 - contador, repeticao, para

    fimescolha
 
    escreval("Deseja adicionar mais alguma coisa?")
    escreval("1 - Sim")
    escreval("2 - Não")
    leia(opcaoFinalizar)
    
    se(opcaoFinalizar = "1") entao
       FinalizarCarrinho <- "N"
       
    senao
    FinalizarCarrinho <- "S"
    fimse
    limpatela()
 fimenquanto

 escreval("Compra Finalizada!")
 escreval("Valor Total : R$ ",valorTotal)
 escreval("-----------------------------")
 escreval("N° PEDIDO 1234")
 
 
Fimalgoritmo