<?php

    $servername = "localhost"; //ip ou dominio do server
    $username = "root"; //usuario no banco de dados
    $password = ""; //senha do usuário no banco de dados
    $dbname = "faculdade"; //nome do banco de dados

    //Criar a conexão com o banco
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificar conexão
    if($conn->connect_error){
        die("Conexão falhou");    
    }

?>