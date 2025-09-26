let listaTimes = ["Santos", "São Paulo", "Palmeiras", "Corinthians"]

// acessar um item do array
console.log(listaTimes[0]);
console.log(listaTimes[1]);
console.log(listaTimes[2]);
console.log(listaTimes[3]);

// adicionar itens em um array
listaTimes.push("Ponte Preta")
listaTimes.push("Flamengo")
console.log(listaTimes);

// verificar o tamanho da lista
console.log(listaTimes.length);

// adicionar um item na primeira posicao
listaTimes.unshift("Fluminense")
listaTimes.unshift("Vasco")
console.log(listaTimes);

// remover o primeiro item do array
listaTimes.shift()
console.log(listaTimes);

// remover o ultimo item do array
listaTimes.pop()
console.log(listaTimes);

// encontrar a posicao de um item do array
console.log(listaTimes.indexOf("Santos"));


let listaNomes = ["Marcos", "Diego", "Camila", "Matheus"]

// remover um elemento do array de acordo com uma posicao desejada
listaNomes.splice(3,1) // Matheus removido
// splice(posição, quantidade de elementos a serem removidos)
console.log(listaNomes);


// alterar um item do array
listaNomes.splice(1,1, "Robson","Edivan")
// splice(posição,qnt de elementos,"elemento novo para substituicao")
console.log(listaNomes);

// adicionar um item
listaNomes.splice(2,0,"Gabriel","Diogo")
console.log(listaNomes);
