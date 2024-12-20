const film = []
let total = 0

const lista = [
    ['../images/a1.png', 'Gladiador II', 'Estreia em 20 de Novembro'],
    ['../images/a2.png', 'Mufasa: O Rei Leão', 'Estreia em 30 de Novembro'],
    ['../images/a3.png', 'Querr', 'Estreia em 3 de Dezembro'],
    ['../images/a5.png', 'Ainda estou aqui', 'Estreia em 3 de Dezembro'],
    ['../images/a6.png', 'Moana II', 'Estreia em 7 de Dezembro'],
    ['../images/a7.png', 'Kraven, o Caçador', 'Estreia em 10 de Dezembro'],
    ['../images/a4.png', 'Venom: A última rodada', 'Estreia em 15 de Dezembro'],
    ['../images/a8.png', 'Wicked', 'Estreia em 18 de Dezembro'],
]

lista.forEach(card => {
    document.getElementById('estreias').innerHTML += `
    <div id="card">
        <img src="${card[0]}" alt="">
        <h3>${card[1]}</h3>
        <h5>${card[2]}</h5>
        <br>
        <button type="button" onclick="adicionarfilme('${card[1]}', '${card[2]}')">ASSISTIR</button>
    </div>
    `
});

function adicionarfilme(verFilme, valor){
    alert('Pegue sua pipoquinha e vamos assistir!')
    total += Number(valor)
    carrinho.push([verFilme, Number(valor)]) 
}

console.log(film);

// carrinho.forEach(item => {
//     document.getElementById('film').innerHTML += `
//     <div id="item">
//         <p>${item[0]}</p>
//         <p>${item[1]}</p>
//         <br>
//     </div>
//     `
// });
