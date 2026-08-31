<?php

$usuarios = [];

function cadastrarUsuario($nome, $email, $idade) {
    return [
        "nome" => $nome,
        "email" => $email,
        "idade" => $idade
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    $usuario = cadastrarUsuario($nome, $email, $idade);

    $usuarios[] = $usuario;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Informações do Cadastro</title>
</head>

<body class="w3-container w3-sand">

    <div class="w3-container w3-padding-32" style="max-width:700px; margin:auto;">

        <header class="w3-center w3-crimson w3-padding-32" 
                style="border-radius: 10px 10px 0 0;">

            <h1 class="w3-xxxlarge">
                <b>Informações do Cadastro</b>
            </h1>

        </header>

        <div class="w3-container w3-card-4 w3-padding-32"
             style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);">

            <h2>Cadastro realizado!</h2>

            <?php

            for ($i = 0; $i < count($usuarios); $i++) {

                echo "<p><b>Usuário " . ($i + 1) . "</b></p>";
            }

            ?>

            <h3>Dados do usuário</h3>

            <?php

            foreach ($usuarios as $usuario) {

                echo "<p>Nome Completo: " . $usuario["nome"] . "</p>";

                echo "<p>Email: " . $usuario["email"] . "</p>";

                echo "<p>Idade: " . $usuario["idade"] . "</p>";

                echo "<hr>";

                echo "<h2>Mensagem especial</h2>";

                echo "<p>
                        Olá, " . $usuario["nome"] . ", seja bem-vindo(a)! 
                        Você se cadastrou com o nome " . $usuario["nome"] . 
                        ", o email " . $usuario["email"] . 
                        " e a idade " . $usuario["idade"] . ".
                      </p>";
            }

            ?>

            <a href="cadastroUsuário.html" 
               class="w3-button w3-crimson w3-round">
                Novo cadastro
            </a>

        </div>
    </div>

</body>
</html>
```
