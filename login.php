<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    '<style>
@charset "utf-8";
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap');

:root{
    --font-logo: 'Poppins', sans-serif;
}

*{
    margin: 0; padding: 0; box-sizing: border-box;
    font-family:var(--font-logo) ;
}

body{background-image: url(./img/img-fundo.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;}
       
header{
    display: flex; justify-content:space-around; align-items: center;
    background-color: #121212; box-shadow: 1px 1px 5px black; margin-top: -25px;
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




/*            Tela de login             */
    main{background-color: white; max-width: 1000px; height: 800px;
        margin: auto; margin-top: 50px; border-radius: 10px; flex-wrap: wrap;
        display: flex; justify-content: space-around; align-items: center;
        padding: 10px 20px 10px 20px;
    } 

/*        Tela da esquerda      */
    .left-login{display: flex; justify-content: center; align-items: center; flex-direction: column;}
    .logo-tc-img{height: 300px; width: 500px}



    /*       Tela da direita - Login      */
    .right-login{height: 400px; background-color: #121212; border-radius: 10px;
                display: flex; align-items: center; justify-content: center;
                padding: 10px 30px 10px 30px;
                }
    .login{display: flex; justify-content: center; align-items: center; flex-direction: column;
            margin: 20px;}
    label{margin-bottom: 16px; display: flex; flex-direction: column; text-align: center;}
    ::placeholder{text-align: center;}

/*      Botão decorado    */
    .btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}

.btn{
    
  border-radius: 20px;
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.btn:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
</style>
</head>


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
            <h1>Faça Login!</h1>
            <img class="logo-tc-img" src="./img/telecall-logo.jpg" alt="">
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

                <input class="btn" type="button" value="Entrar" name="btn_entrar">
                <p><a href="novo-usuario.php">Cadastre-se</a></p>
            </form>
        </div>
    </main>
    
</body>
</html>