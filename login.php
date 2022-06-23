<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<?php
    include('config.php');

    if(empty($_POST['cadastrados']) || empty($_POST['senha'])){
        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
            $usuario = $conn->real_escape_string($_POST['usuario']);  
            $senha = $conn->real_escape_string($_POST['senha']);      

            $sql = "SELECT * FROM cadastrados email = '$usuario' AND senha = $senha";
            $sql_query = $mysqli->query($sql) or die("Falha no código:" .$mysqli->error);
        }
    }
    
    $cadastrados = $_POST['cadastrados'];
    $senha = $_POST['senha'];
?>
<body>
    <header>
            <div class="logo">
                <a href="index.php" target="_self" rel="next">
                    <div class="box">T</div> <div class="box">E</div>
                    <div class="box">L</div> <div class="box">E</div>
                </a>
            </div>

            <nav class="nav-bar">
                <ul>
                    <li><a class="link" href="https://web.whatsapp.com/" target="_self" >Contato</a></li>
                    <li><a class="link" href="listar.php" target="_self" rel="next">Sobre</a></li>
                    <li><a class="link" href="novo-usuario.php" target="_self" rel="next">Cadastre-se</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <div class="left-login">
            <h1 class="text-field-left">Faça Login!</h1>
            <img class="logo-tc-img" src="./img/telecall-logo.jpg" alt="">
        </div>

        <div class="right-login">
            <form class="login" action="enter-login.php" method="post">
                <h1 class="text-field-right">Login</h1>

                <label class="textfield">
                    <p>Usuário</p> <input class="caixa" type="text" name="usuario" placeholder="Digite o nome de usuário">
                </label>

                <label>
                    <p>Senha</p> <input class="caixa" type="password" name="senha" placeholder="Digite sua senha">
                </label>

                <input class="btn" type="button" value="Entrar" name="btn_entrar">
                <p><a class="link" href="novo-usuario.php">Cadastre-se</a></p>
            </form>
        </div>
    </main>
    
</body>
</html>