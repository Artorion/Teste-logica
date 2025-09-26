 for (let i = 0; i <= 10; i++) {
     // for (varíavel = inicio; fim ; pulo (i++ = 1 em 1) (i+=2 = 2 em 2))
     console.log(i);
 }

let listaProdutos = ["Computador", "Notebook", "Teclado", "Mouse", "Fone"]

// percorrer uma array - For
for (let i = 0; i < listaProdutos.length; i++) {
    console.log(listaProdutos[i]);
}

// percorrer uma array - ForEach (melhor opção a se usar e mais usada)
listaProdutos.forEach((produto) => {
    console.log(produto);
})

