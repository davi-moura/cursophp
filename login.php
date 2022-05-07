<?php
session_start();
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem-vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']):  ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erros): ?>
                        <p><?= $erros ?></p>
                    <?php endforeach  ?>
                </div>
            <?php endif  ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>

