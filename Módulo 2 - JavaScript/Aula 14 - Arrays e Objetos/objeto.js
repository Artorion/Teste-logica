// criacao de um objeto
let produto = {
    nome: "Computador",
    // chave = valor
    fabricante: "Positivo",
    preco: 2000,
    processador: "I3-2100",
}

// acessando o objeto
console.log(produto.nome);
// (nome do objeto.nome da variavel)

// adicionar um item no objeto
produto.armazenamento = "250 gb"
produto["memoria RAM"] = "8 gb" 

console.log(produto);


// remover um elemento
delete produto.armazenamento
delete produto["memoria RAM"]

console.log(produto);



