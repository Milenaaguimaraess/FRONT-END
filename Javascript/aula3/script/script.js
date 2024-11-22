// DOM - FAZ A INTEGRAÇÃO DO HTML E DO JAVASCRIPT
// URL - LOCATION
// "BOTÃO DE VOLTAR" -HISTORY
// "SITE/CONTEUDO" - DOCUMENTO

//window.location.reload() -> reload serve p/ reiniciar a pagina infinitamente
//window.location = "https://www.google.com"




// document - documento
// getSelection - busca o sujeito pelo id
// inner... - coloca um elemento dentro
// se InnerText - apenas um texto
// se InnnerHTML - texto e código
//document.getElementById("catalogo").innerText = '<h3>oi</h3>'
document.getElementById("catalogo").innerHTML = '<h3>oi</h3>'
document.querySelector('#catalogo').innerHTML = "Olá"

function registrarnome(){
    nome = document.querySelector("#inputNome").value
    //alert('O seu nome é ' +nome)

    document.querySelector('#catalogo').innerHTML = `
    <div id="nomeDiv">
   eu, ${nome}, sou muito toop!
    </div>
    `
}