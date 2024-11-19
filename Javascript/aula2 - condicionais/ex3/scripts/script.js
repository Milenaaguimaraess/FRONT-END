function operacao(){
    prompt("Escolha um número entre 1 e 7")
    escolha = ('1) Domingo, 2) Segunda-feira, 3) Terça-Feira, 4) Quarta-Feira, 5) Quinta-Feira, 6) Sexta-Feira, 7) Sábado')

    switch(escolha){
        case '1':
            alert('Você escolheu Domingo')
            break
        case '2':
            alert('Você escolheu Segunda-feira')
            break
        case '3':
            alert('Você escolheu Terça-Feira')
            break
        case '4':
            alert('Você escolheu Quarta-Feira')
            break
        case '5':
            alert('Você escolheu Quinta-Feira')
            break
        case '6':
            alert('Você escolheu Sexta-Feira')
            break
        case '7':
            alert('Você escolheu Sábado')
            break
       // default:
           // alert('Opção inválida. Tente novamente.')
          //  break
    }
}