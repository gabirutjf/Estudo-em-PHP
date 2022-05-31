<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleCall</title>
    <link rel="stylesheet" href="header.css">
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
                <li><a class="link" href="https://web.whatsapp.com/" target="_blank" >Contato</a></li>
                <li><a class="link" href="login.php" target="_self" rel="next">Login</a></li>
                <li><a class="link" href="novo-usuario.php">Cadastre-se</a></li>
            </ul>
        </nav>
</header>


<div class="container">
    <div class="row">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-usuario.php");
                    break;
                    case "listar":
                        include("listar-usuario.php");
                    break;
                    case "salvar":
                        include("salvar-usuario.php");
                    break;
                    default;
                        echo "<h1>Bem Vindos!</h1>";
                }
            ?>
    </div>
</div>
<a href="./listar.php">lista</a>

</body>
</html>