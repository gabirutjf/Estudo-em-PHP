<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include('conexão.php');

        if(isset($_POST['usuario']) || isset($_POST['senha'])){

            if(strlen($_POST['usuario']) == 0){
                echo "Preencha seu e-mail";
            } else if(strlen($_POST['senha']) == 0){
                echo "Preencha sua senha";
            } else {

                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND '$senha'";
                $sql_query = $mysqlli->query($sql_code) or die("Falha na execução do código SQL:" .$mysqli->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {

                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['user'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    header("Location: index.php");

                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
            }
        }
    ?>

</body>
</html>