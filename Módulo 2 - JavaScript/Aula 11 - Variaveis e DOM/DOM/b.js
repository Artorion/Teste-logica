// document.body.style.backgroundColor = "gray"

// window.alert("Seja BEM-VINDO")

// window.prompt("Login")
// window.prompt("Senha")

// window.confirm("Site com vírus, deseja continuar?")

let paragrafo1 = document.getElementsByTagName("p") [0]
// selecionar uma tag especifica do HTML (p)  primeira posição [0]
paragrafo1.innerHTML = "USANDO O TAG NAME"
// modificar o conteúdo dentro do HTML
paragrafo1.style.backgroundColor = "red"
// estilizar a caixa

let paragrafo2 = document.getElementById("paragrafo2")
// selecionar a tag atraves do ID
paragrafo2.innerHTML = "USANDO O ID"
paragrafo2.style.backgroundColor = "green"

let paragrafo3 = document.getElementsByClassName("paragrafo3") [0]
// selecionar a tag atraves do class
paragrafo3.innerHTML = "USANDO O CLASS"
paragrafo3.style.backgroundColor = "blue"

// document.getElementsByName (variável) [posição]
// selecionar a tag atraves do name, usado no input

let paragrafo4 = document.querySelector("#paragrafo4")
// usando o query no id, sempre colocar a # antes do id
paragrafo4.innerHTML = "USANDO O QUERY SELECTOR"
paragrafo4.style.backgroundColor = "pink"

let paragrafo5 = document.querySelectorAll("p") [4]
// para selecionar todas as tag 
paragrafo5.innerHTML = "USANDO O QUERY SELECTOR ALL"
paragrafo5.style.backgroundColor = "purple"