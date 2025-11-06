<?php

    if (isset($_POST["id"])) {
        // isset = valida se o $_POST["id"] está vazio

        // Conexão com o banco de dados
        include("../conexao/conexao.php");

        // Criar a variável do id
        $id = $_POST["id"];

        // Prepara a consulta SQL para excluir cadastro
        $sql = "DELETE FROM usuario WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id);

            // Executar a query
            $stmt->execute();
            // Direcionar você para a página selecionado
            header("location:verificarUsuario.php");
            // Encerra a consulta
            $stmt->close();
        } else {
            // Mensagen de erro
            echo "<div class='mensagem erro'> Erro na consulta </div>";
        }
        // Encerra a conexão com o banco de dados
        $conn->close();


    }



?>