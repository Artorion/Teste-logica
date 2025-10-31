<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
    
    <header>

        <nav>

            <ul>
               <li><a href="../index.html">Home</a></li>
               <li><a href="#">Cadastrar Usuário</a></li>
               <li><a href="verificarUsuario.php">Procurar Usuário</a></li>
            </ul>

        </nav>

    </header>

    <main>
        <form action="cadastro.php" method="POST">
            <h2>Cadastro de Aluno</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome">

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">

            <label for="curso">Selecione o Curso:</label>
            <select name="curso" id="curso">
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="es">Engenharia de Software</option>
                <option value="si">Sistemas da Informação</option>
                <option value="cc">Ciências da Computação</option>/
            </select>

            <input type="submit" value="Cadastrar">
        </form>
    </main>

    <?php

       try {
       if($_SERVER["REQUEST_METHOD"] == "POST") {
        include("../conexao/conexao.php");

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];
        // criar uma variável com os valores digitados pelo usuário

        //Criar
        $hoje = new DateTime();
        // adquirir a data de hoje
        $id = $hoje->format("Ym").rand(100,999);
        // formato do id(year/month)

        $sql = "INSERT INTO usuario (id,nome,sobrenome,email,curso) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        // Criar conexão com o banco de dados
        $stmt->bind_param("issss",$id,$nome,$sobrenome,$email,$curso);
        // paramatreos a serem inseridos
        $stmt->execute();

        echo "<div class='mensagem sucesso'>Usuário cadastrado com sucesso</div>";

        $stmt->close();
        $conn->close();
        // fechar o código apos a execucação
       }


       }

       catch(mysqli_sql_exception $e){
        // Duplicate entry
        if (str_contains($e->getMessage(), "Duplicate entry")) {
        // str_contains = if 'in'
            echo "<div class='mensagem erro'>E-mail já está cadastrado</div>";
        } else {
            echo "<div class='mensagem erro'>Erro ao cadastrar, Tente novamente mais tarde</div>";
        }
        echo $e->getMessage();
       }
    //    correção de erros



    ?>


</body>
</html>