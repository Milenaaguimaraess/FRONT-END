// CRUD (criar, ler, atualizar e deletar um valor)
// CREAT - CRIAR
// READ - LER
// UPDATE - ATUALIZAR
// DELETE - DELETAR

// site com os possiveis codigos
//  https://http.cat/

document.querySelector('#logar').addEventListener('click',logar)

function logar(){
    // alert('') => pra ver se ta dando bug nessa parte, por isso o alert
    let nome_digitado = document.querySelector('#nome').value
    let nome_salvo = ''
    let senha_digitada = document.querySelector('#senha').value
    let senha_salva = ''
    let login = false

    fetch('script/dados.json').then((response) => {
    return response.json()
}).then((dados) => {
    dados.usuarios.map((informacoes) => {
        // console.log(informacoes.nome)
        nome_salvo = informacoes.nome
        senha_salva = informacoes.senha

        // se fez tudo isso, o login é verdadeiro
        if(nome_digitado == nome_salvo && senha_digitada == senha_salva){
            login = true
        }

        if(login){
            alert('Login efetuado!')
            // vai salvar o nome da pessoa no pc 
            localStorage.setItem('nome',nome_digitado)

            window.location = '/home.html'
        }else{
            document.querySelector('#resposta').innerHTML = "Usuário e senha incorretos"
        }

     })  
    })  
}