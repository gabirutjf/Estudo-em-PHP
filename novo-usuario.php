<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
@charset "utf-8";
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap');

:root{
    --font-logo: 'Poppins', sans-serif;
}

*{
    margin: 0; padding: 0; box-sizing: border-box;
    font-family:var(--font-logo) ;
}

body{background-color: black;}

header{
    display: flex; justify-content:space-around; align-items: center;
    background-color: #121212; box-shadow: 1px 1px 5px black;
}

a{
    display: flex;
    text-decoration: none;
}

/*        LOGO INTERATIVA          */
.logo{
    display: flex; margin-left: 30px;
}

.box{
    width: 50px; height: 50px; display: flex; justify-content: center;
    align-items: center; font-size: 1.4em; font-weight: 700; color: #ffffff;
    transition: all .8s; cursor: pointer; position: relative;
    background-color: #ca1c2a; overflow: hidden;
}

.box::before{
    content: 'C'; position: absolute; top: 0; background-color: #0f0f0f;
    width: 100%; height: 100%; display: flex; justify-content: center;
    align-items: center; transform: translateY(100%);
    transition: transform .4s;
}
.box:nth-child(2)::before{transform: translateY(-100%); content: 'A';}
.box:nth-child(3)::before{content: 'L';}
.box:nth-child(4)::before{transform: translateY(-100%); content: 'L';}
.logo:hover .box::before{transform: translateY(0);}

/*            NAVBAR           */   
.nav-bar > ul {flex-wrap: wrap; display: flex; justify-content: center; align-items: center;}
li{margin-left: 20px; list-style: none; color: white;}
.link{text-decoration: none; color: #ffffff;}
.link:hover{color: #b73d47;}

main{background-color: white; max-width: 600px; height: 850px; margin: auto;
            border-radius: 10px; margin-top: 20px;}
.cadastro{display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center;
          padding-top: 30px;}
label{display: flex; justify-content: center; align-items: center; flex-direction: column;}
        
    </style>
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
                <li><a class="link" href="listar.php" target="_self" rel="prev">Login</a></li>
                <li><a class="link" href="novo-usuario.php" target="_self">Cadastre-se</a></li>
            </ul>
        </nav>
</header>

    <main>
        <form class="cadastro" action="salvar-usuario.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <h1>Cadastre-se</h1>
            <label for="nome">
                Nome <input type="text" name="nome" placeholder="Digite seu nome">
            </label>

            <label for="email">
                E-mail <input type="text" name="email" placeholder="Digite o E-mail">
            </label>

            <label for="senha">
                Senha <input type="password" name="senha" placeholder="Digite a senha">
            </label>

            <label for="materno">
                Nome materno <input type="text" name="materno" placeholder="Digite o nome da sua mãe">
            </label>

            <label for="cpf">
                CPF <input type="number" name="cpf" placeholder="Digite Cpf">
            </label>

            <label for="celular">
                Telefone celular <input type="number" name="celular" placeholder="Digite seu contato">
            </label>

            <label for="fixo">
                Telefone fixo <input type="number" name="fixo" placeholder="Telefone fixo">
            </label>

            <label for="nascimento">
                Data de Nascimento <input type="date" name="nascimento" placeholder="Data de nascimento">
            </label>
            <br>
            <h2>Endereço</h2>
            
            <label for="cep">
                CEP <input type="number" name="cep" placeholder="Digite o CEP">
            </label>

            <label for="estado">
                Estado <input type="text" name="estado" placeholder="Estado">
            </label>

            <label for="cidade">
                Cidade <input type="text" name="cidade" placeholder="Digite sua cidade">
            </label>

            <label for="rua">
                Rua <input type="text" name="rua" placeholder="Digite sua rua">
            </label>

            <label for="numero">
                Número <input type="number" name="numero" placeholder="Número da residência">
            </label>
            <br>
            <input type="submit" name="btn_cadastro" value="Cadastrar">
        </form>
    </main>
    <a href="login.html">voltar</a>
</body>
</html>