<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
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
            <input type="hidden" name="acao" value="cadastrar">
            
            <h1>Cadastre-se</h1>
            <label for="nome">
                Nome <input class="textfield" type="text" name="nome" placeholder="Digite seu nome">
            </label>

            <label for="email">
                E-mail <input class="textfield" type="text" name="email" placeholder="Digite o E-mail">
            </label>

            <label for="senha">
                Senha <input class="textfield" type="password" name="senha" placeholder="Digite a senha">
            </label>

            <label for="materno">
                Nome materno <input class="textfield" type="text" name="materno" placeholder="Digite o nome da sua mãe">
            </label>

            <label for="cpf">
                CPF <input class="textfield" type="number" name="cpf" placeholder="Digite Cpf">
            </label>

            <label for="celular">
                Telefone celular <input class="textfield" type="number" name="celular" placeholder="Digite seu contato">
            </label>

            <label for="fixo">
                Telefone fixo <input class="textfield" type="number" name="fixo" placeholder="Telefone fixo">
            </label>

            <label for="nascimento">
                Data de Nascimento <input class="textfield" type="date" name="nascimento" placeholder="Data de nascimento">
            </label>
            <br>
            <h2>Endereço</h2>
            
            <label for="cep">
                CEP <input class="textfield" type="number" name="cep" placeholder="Digite o CEP">
            </label>

            <label for="estado">
                Estado <input class="textfield" type="text" name="estado" placeholder="Estado">
            </label>

            <label for="cidade">
                Cidade <input class="textfield" type="text" name="cidade" placeholder="Digite sua cidade">
            </label>

            <label for="rua">
                Rua <input class="textfield" type="text" name="rua" placeholder="Digite sua rua">
            </label>

            <label for="numero">
                Número <input class="textfield" type="number" name="numero" placeholder="Número da residência">
            </label>
            <input class="btn_cadastro" type="submit" name="btn_cadastro" value="Cadastrar">
        </form>
    </main>
    <a href="login.html">voltar</a>
</body>
</html>