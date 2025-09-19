function calcularMedia(){
    let soma1 = parseInt(document.querySelector("#nota1").value)
    let soma2 = parseInt(document.querySelector("#nota2").value)
    let a = document.querySelector("#resultado")
    a.innerHTML = (soma1 + soma2)/ 2  
}   