function calcular(){
    let nota1 = parseFloat(document.getElementById ("num1").value)
    let nota2 = parseFloat(document.getElementById ("num2").value)
    let leitura = document.querySelector("#operacao").value
    let resultado = document.querySelector("#resultado")

    if (isNaN(nota1) || isNaN(nota2)){
        resultado.innerHTML = "PREENCHA TODOS OS CAMPOS"
        resultado.style.color = "red"   
    } else if (leitura == "+"){
        resultado.innerHTML = nota1 + nota2
    } else if (leitura == "-"){
        resultado.innerHTML = nota1 - nota2
    } else if (leitura == "*"){
        resultado.innerHTML = nota1 * nota2
    } else if (leitura == "/") { 
        resultado.innerHTML = nota1 / nota2
    }
}