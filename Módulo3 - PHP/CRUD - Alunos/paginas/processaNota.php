<?php

    include("../conexao/conexao.php");
    // conexão com o banco de dados

    if (isset($_POST['nota_atividade']) && isset ($_POST['nota_prova'])) {
        
        foreach ($_POST['nota_atividade'] as $id => $nota_atividade) {
            $nota_prova = $_POST['nota_prova'][$id];
            $nota_final = $nota_atividade * 0.3 + $nota_prova * 0.7;
            // Preparar a consulta de dados
            $sql = "UPDATE usuario SET nota_atividade = ?, 
                    nota_prova = ?, 
                    nota_final = ?
                    WHERE id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("dddi", $nota_atividade,$nota_prova, $nota_final, $id);
            $stmt->execute();
        }

        header("location: atualizarNota.php");
        
    };








?>