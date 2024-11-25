// var clienteNome = 'Leo'
// var clenteCPF = 9999999999
// var clienteEmail = 'email@email'
// var clienteTelefone = 8888888
// var clienteTipoConta = 'fisico'
// var clienteSaldo = 0

// var clienteNome2 = 'Alessandra' 

class Cliente{
    nome;
    dataNascimento;
    cpf;
    email;
    telefone; 
    tipoDeConta;
    Saldo;
    depositar(valor){
        //if(this.saldo <= valor){
           // console.log('Você não tem saldo suficiente disponível!')
        if(valor <= 0){
            console.log('Operação não permitida')
        }else{
            this.Saldo += valor
          console.log(`O valor de ${valor} foi depositado com sucesso!`)
        }     

    }
    // argumento - é o valor passado
    // parâmetro - é a palavra que vai salvar o argumento
    pix(valor){
        if(this.Saldo < valor){
            console.log('Saldo insuficiente!')
        }else{
        this.Saldo -= valor
        console.log(`Pix de valor ${valor} foi efetuado com sucesso!`)
    }
    //toda ação ou verbo é função (salvar, calcular, sacar, depositar)
    // algo em parenteses em uma função é um argumento ()
    }
}

var cliente1 = new Cliente
cliente1.nome = 'Leo'
cliente1.dataNascimento = '11/04/2000'
cliente1.cpf = 88888888-88
cliente1.email = 'leoaaaleo@gmail.com'
cliente1.Saldo = 500

cliente1.pix(100) 


console.log(cliente1)
