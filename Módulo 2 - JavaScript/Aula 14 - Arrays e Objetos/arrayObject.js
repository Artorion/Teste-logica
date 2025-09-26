// criacao de um array com varios objetos
let listaProdutos = [
    {nome:"Computador", fabricante: "Dell", valor: 5000},
    {nome:"Notebook", fabricante: "Acer", valor: 3000},
    {nome:"Monitor", fabricante: "LG", valor: 900},
    {nome:"Teclado", fabricante: "ReDragon", valor: 200},
    {nome:"Mouse", fabricante: "Logitech", valor: 600}
]

// buscar um objeto especifico
console.log(listaProdutos[0]);
console.log(listaProdutos[1].nome);


// listar o array
listaProdutos.forEach((produto) => {
    console.log(`O ${produto.nome} da ${produto.fabricante} é R$ ${produto.valor}`);
    // template format (`texto ${variável} texto`)
}) 

// filtro do array e objetos
let listaProdutosCaros = listaProdutos.filter(produto => produto.valor > 1000 )
// let variavel = variavel que armazena o que sera filtrado.filter (variavel do forEach => variavel.valor condição)
console.log(listaProdutosCaros);


