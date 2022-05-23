<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
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
</html>
<?php
        require_once("config.php");
            $sql = "SELECT * FROM cadastrados";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;

            if($qtd > 0){
                echo "<table>";
                while($row = $res->fetch_object()){
                    echo "<tr>";
                        echo "<td>".$row->id."</td>";
                        echo "<td>".$row->nome."</td>";
                        echo "<td>".$row->email."</td>";
                        echo "<td>".$row->nascimento."</td>";
                        echo "<td>".$row->celular."</td>";
                        
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<script>alert('Erro');</script>";
                echo "<script>location.href='novo-usuario.php';</script>";
            }
        ?>