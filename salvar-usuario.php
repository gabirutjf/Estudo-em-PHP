<?php
    require_once("config.php");
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $materno = $_POST["materno"];
            $cpf = $_POST["cpf"];
            $celular = $_POST["celular"];
            $fixo = $_POST["fixo"];
            $nascimento = $_POST["nascimento"];
            $cep = $_POST["cep"];
            $estado = $_POST["estado"];
            $cidade = $_POST["cidade"];
            $rua = $_POST["rua"];
            $numero = $_POST["numero"];

            $sql = "INSERT INTO cadastrados (nome, email, senha, materno, cpf, celular,
             fixo, nascimento, cep, estado, cidade, rua, numero) 
             values
             ('{$nome}','{$email}','{$senha}','{$materno}','{$cpf}',
             '{$celular}','{$fixo}','{$nascimento}','{$cep}','{$estado}',
             '{$cidade}','{$rua}','{$numero}')";

             $res = $conn->query($sql);
        break;

        case 'editar':
        break;

        case 'excluir':
        break;  

        echo "<center><h1>Cadastrado!</h1></center>";
    }
?>