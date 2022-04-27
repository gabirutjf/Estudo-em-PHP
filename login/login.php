<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /*     container login     */
    body{background-image: url(../img/img-paisagem.jpeg); 
        background-size: cover; background-repeat: no-repeat; background-attachment: fixed;}
    
    main{background-color: white; max-width: 850px; height: 800px;
        margin: auto; border-radius: 10px; flex-wrap: wrap;
        display: flex; justify-content: space-around; align-items: center;
        }
        
    .left-login{display: flex; justify-content: center; align-items: center; flex-direction: column;}

    .logo-tc-img{height: 300px; width: 500px}
    /*       Tela da direita - Login      */
    .right-login{height: 300px; background-color: #121212; border-radius: 10px;
                display: flex; align-items: center; justify-content: center;
                padding: 10px 30px 10px 30px;
                }
    .login{display: flex; justify-content: center; align-items: center; flex-direction: column;
            margin: 20px;}
    label{margin-bottom: 16px; display: flex; flex-direction: column; text-align: center;}
    ::placeholder{text-align: center;}
    </style>
</head>
<body>
    <main>
        <div class="left-login">
            <h1>Faça Login!</h1>
            <img class="logo-tc-img" src="../img/telecall-logo.jpg" alt="">
        </div>

        <div class="right-login">
            <form class="login" action="" method="post">
                <h1>Login</h1>

                <label class="textfield">
                    Usuário <input type="text" name="usuario" placeholder="Digite o nome de usuário">
                </label>

                <label>
                    Senha <input type="password" name="senha" placeholder="Digite sua senha">
                </label>

                <input type="button" value="Entrar" name="btn_entrar">
                <p><a href="../cadastro/cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </main>
    <a href="../tc.php">voltar</a>
</body>
</html>