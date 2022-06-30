<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleCall</title>
    <link rel="shortcut icon" href="./img/512x512bb.jpg" type="image/x-icon">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="parallax.css">
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
                <li><a class="link" href="./informações.php" target="_blank" >Sobre</a></li>
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
                    case "editar";
                        include("editar-usuario.php");
                    break;
                    default;
                }
            ?>
    </div>
<img class="imglogo" src="./img/telecall-logo.jpg" alt="">
    
    <section class="normal">
        <p>Com início em 1998 oferecendo serviços de voz no Japão, a divisão internacional Telecall Wholesale foi criada com o objetivo de apoiar o setor de varejo da empresa. Desde seu lançamento, a Telecall Wholesale sempre teve muita pressão interna para oferecer serviços de alta qualidade com tarifas competitivas em um mercado extremamente competitivo. Com essa filosofia, a Telecall focou no mercado internacional e alcançou uma cobertura global com parceiros estratégicos, obtendo hoje, mais de 600 interconexões com algumas das maiores operadoras do mundo.</p>
    </section>

    <section class="imagem" id="img01">
        <p>Com uma enorme capacidade de lidar com diferentes mercados e culturas, a Telecall Wholesale pôde apoiar e adaptar-se quando a empresa lançou em 2005, um produto de varejo nos EUA, um dos mercados mais competitivos do mundo.</p>
    </section>

    <section class="normal">
        <p>Outro desafio veio em 2010, quando a Telecall decidiu construir sua própria rede de fibra óptica na cidade do Rio de Janeiro, no Brasil, e começou a oferecer serviços empresariais de voz e dados.</p>
    </section>
    
    <section class="imagem" id="img02">
        <p>Em um curto espaço de tempo a Telecall vem ganhando respeito nacional e internacional, e fez história ao participar com muito sucesso nos Jogos Olímpicos de 2014 no Brasil e do Rock in Rio em 2017.</p>
    </section>

    <section class="normal">
        <p>Após quase 20 anos de sucesso e crescimento exponencial, a Telecall Wholesale é conhecida hoje como uma Global Carrier, com sólidas relações comerciais, capaz de se adaptar e lidar com os constantes desafios e mudanças do mundo dos negócios.</p>
    </section>
</div>

</body>
<a href="./listar.php">lista</a>
</html>