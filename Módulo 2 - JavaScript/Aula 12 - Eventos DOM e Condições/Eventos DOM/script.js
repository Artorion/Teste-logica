let caixa = document.getElementById("mouse")
    // puxando o ID para modifica-lo

function entradaMouse() {
    caixa.style.backgroundColor = "blue"
    
}

function saidaMouse() {
    caixa.style.backgroundColor = "lightblue"
}

function mudaHtml() {
    let nome = document.querySelector("#nome").value
    // .value para selecionar o valor escrito na caixa pelo usuário
    caixa.innerHTML = nome
    // innerHTML = modificar o texto escrito do conteúdo
}