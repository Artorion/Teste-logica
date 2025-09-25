function calcularPagamento(){
    let valorGasto = parseFloat(document.getElementById("valorCompra").value)
    let formaPagamento = document.querySelector("#formaPagamento").value
    let resultado = document.querySelector("#resultado")

    switch (formaPagamento) {
        case "pix":
            let valorfinal = valorGasto * 0.9
            resultado.innerHTML = "O valor a ser pago é de " + valorfinal.toFixed(2)
            break
        case "debito":
            valorFinal = valorGasto * 0.95
            resultado.innerHTML = "O valor a ser pago é de " + valorFinal.toFixed(2)
            break 
        case "credito":
            resultado.innerHTML = "O valor a ser pago é de " + valorGasto.toFixed(2)
            break   
        defaltut:
        resultado.innerHTML = "VALOR INVÁLIDO"
        break
    }

}