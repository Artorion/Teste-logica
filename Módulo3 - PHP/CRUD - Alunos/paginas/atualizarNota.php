<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Nota</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    
    <header>
     <nav>
        <ul>
           <li><a href="../index.html">Home</a></li>
           <li><a href="cadastro.php">Cadastrar Usuário</a></li>
           <li><a href="verificarUsuario.php">Procurar Usuário</a></li>
        </ul>
     </nav>
    </header>

    <main>

    <section id="containerSection">
        <form action="atualizarNota.php" method="post">
            <select name="curso" id="curso" class="estilo">
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="es">Engenharia de Software</option>
                <option value="si">Sistemas da Informação</option>
                <option value="cc">Ciências da Computação</option>
            </select>
            <input type="submit" value="Buscar">
        </form>
    </section>

    <section>

    <?php

        // Verificar se o $_POST["curso"] está preenchido
        if (isset($_POST["curso"])) {

            // Conexão com o banco de dados
            include("../conexao/conexao.php");
            $curso = $_POST["curso"];

            // Preparando a consulta SQL
            $sql = "SELECT * FROM usuario WHERE curso = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {

                $stmt->bind_param("s", $curso);
                // trocar a interrogação do $sql
                $stmt->execute();
                $resultado = $stmt->get_result();
                // capturar a informação adquirida do banco de dados

                if ($resultado->num_rows > 0) {
                    
                    $cursos = [
                        "ads" => "Análise e Desenvolvimento de Sistemas",
                        "es" => "Engenharia de Software",
                        "si" => "Sistemas da informação",
                        "cc" => "Ciências da Computação"
                    ];

                    $nomeCurso = $cursos[$curso];
                    echo "<h2 style='text-align=center'>$nomeCurso</h2>";

                    echo "<form action='processaNota.php' method='post' id='form-nota'>
                        <table>
                         <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Nota Atividade</th>
                            <th>Nota Prova</th>
                         </tr>
                      </thead>
                      <tbody>";

                      while ($row = $resultado->fetch_assoc()) {
                        // fetch_assoc = transfomar em um aray associativo
                        
                        echo "
                            <tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nome']}</td>
                                <td>{$row['sobrenome']}</td>
                                <td><input type='number' name='nota_atividade[{$row['id']}]' required></td>
                                <td><input type='number' name='nota_prova[{$row['id']}]' required></td>
                            </tr>";

                      }

                      echo "        
                        </tbody>
                            </table>
                            <input type='submit' value'Enviar'></input>
                        </form>";


                        
                } else {
                    echo "<div class='mensagem erro'>O curso não possui alunos cadastrados</div>";
                }


            }
        }

    ?>

    </section>

    </main>


</body>
</html>