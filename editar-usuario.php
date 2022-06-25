<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="shortcut icon" href="./img/512x512bb.jpg" type="image/x-icon">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="novo-usuario.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php" target="_self" rel="prev">
                <div class="box">T</div> <div class="box">E</div>
                <div class="box">L</div> <div class="box">E</div>
            </a>
        </div>

        <nav class="nav-bar">
            <ul>
                <li><a class="link" href="https://web.whatsapp.com/" target="_blank" >Contato</a></li>
                <li><a class="link" href="login.php" target="_self" rel="prev">Login</a></li>
                <li><a class="link" href="novo-usuario.php" target="_self">Cadastre-se</a></li>
            </ul>
        </nav>
</header>
    <main>
        <form class="cadastro" action="salvar-usuario.php" method="POST">
            <input type="hidden" name="id" value="<?= $_GET['id']?>">
            <input type="hidden" name="acao" value="editar">

            
            <h1>Editar usuário</h1>
            <?php
            require_once("config.php");
                $sql = "SELECT * FROM cadastrados WHERE id=".$_REQUEST["id"];
                $res = $conn->query($sql);
                $row = $res->fetch_object();
            ?>
            <label for="nome">
                Nome <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $row->nome;?>">
            </label>

            <label for="email">
                E-mail <input type="text" name="email" placeholder="Digite o E-mail" value="<?php echo $row->email;?>">   
            </label>

            <label for="senha">
                Senha <input type="password" name="senha" placeholder="Digite a senha" required>
            </label>

            <label for="celular">
                Telefone celular <input type="number" name="celular" placeholder="Digite seu contato" value="<?php echo $row->celular;?>">
            </label>

            <label for="nascimento">
                Data de Nascimento <input type="date" name="nascimento" placeholder="Data de nascimento" value="<?php echo $row->nascimento;?>">
            </label>
        
            <input type="submit" name="btn_editar" value="Editar">
        </form>
    </main>
    
    <a href="login.html">voltar</a>
</body>
</html>