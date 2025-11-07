<?php


// Percorrer o array
$nomes = ["Caio","Marcos","Diego"];

foreach($nomes as $nome) {
    echo $nome . "<br>";
}

// Percorrer o array associativo
$notasAtividades = [
        "Caio" => 10,
        "Marcos" => 8,
        "Diego" => 9
];

foreach($notasAtividades as $nome => $nota) {
    echo $nome . " nota " . $nota . "<br>";
}

// Percorrer dois arrays associativos
$notasAtividades = [
    "Caio" => 10,
    "Marcos" => 8,
    "Diego" => 9
];

$notasProvas = [
        "Caio" => 9,
        "Marcos" => 7,
        "Diego" => 5
];

foreach($notasAtividades as $nome => $nota) {
    // Percorrerá o array notasAtividades salvando na variável nome a chave a na váriavel nota o valor
    $prova = $notasProvas[$nome];
    // Percorrerá o array NotasProvas salvando o valor e a chave sendo repitida pois já se foi salva

    echo $nome . " nota " . $nota . "<br>";
    echo $nome . " nota " . $prova . "<br>";
}

?>