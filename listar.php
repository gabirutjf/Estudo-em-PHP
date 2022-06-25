<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
        body{background-image: url();}
        header{margin-bottom: 20px;}
        tr{text-align: center;}
        td{padding-left: 10px; padding-right: 10px; padding-top: 10px; border: solid 1px black;}
        .lista{margin: auto; width: 926px;}
        button{margin-bottom: 10px;}
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
                <li><a class="link" href="login.php" target="_self" rel="prev">Login</a></li>
                <li><a class="link" href="novo-usuario.php" target="_self">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <div class="lista">
        <?php
            require_once("config.php");
                $sql = "SELECT * FROM cadastrados";
                $res = $conn->query($sql);
                $qtd = $res->num_rows;
                if($qtd > 0){
                    echo "<table class='table table-hover table-striped table-bordered'>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Nome</th>";
                    echo "<th>E-mail</th>";
                    echo "<th>Data de Nascimento</th>";
                    echo "<th>Celular</th>";
                    echo "</tr>";
                    while($row = $res->fetch_object()){
                        echo "<tr>";
                            echo "<td>".$row->id."</td>";
                            echo "<td>".$row->nome."</td>";
                            echo "<td>".$row->email."</td>";
                            echo "<td>".$row->nascimento."</td>";
                            echo "<td>".$row->celular."</td>";
                            echo "<td>
                            <button onclick=\"location.href='editar-usuario.php?id=".$row->id."';\"
                                <button class='btn btn-sucess'>Editar</button>
                                
                                <button onclick=\"location.href='salvar-usuario.php?acao=excluir&id=".$row->id."';\"
                                <button class='btn btn-danger''>Excluir</button>
                                </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }else{
                    echo "<script>alert('Erro');</script>";
                    echo "<script>location.href='novo-usuario.php';</script>";
                }
            ?>
    </div>
</html>
