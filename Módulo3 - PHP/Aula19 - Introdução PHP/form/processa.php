<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    
    <main class="container">
        <h1>Dados Enviados</h1>

        <?php
        //    echo var_dump($_POST["nome"]);
        //$_REQUEST = serve tanto para post e get
        

        $nome = $_POST["nome"];
        $sobreNome = $_POST["sobreNome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        // SHIFT + ALT = copiar a linha para baixo

        echo "<p> <strong id='campoNome'> O seu nome é </strong> $nome</p>";
        echo "<p><strong>O seu sobrenome é </strong> $sobreNome</p>";
        echo "<p><strong>O seu email é </strong> $email</p>";
        echo "<p><strong>A sua senha é </strong> $senha</p>";
        ?>

    </main>


    
</body>
</html>