<?php
    require_once("config.php");
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
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

             if($res==true){
                echo "<script>alert('Cadastro com sucesso');</script>";
                echo "<script>location.href='listar.php';</script>";
            }else{
                echo "<script>alert('Erro');</script>";
                echo "<script>location.href='listar.php';</script>";
            }
        break;

        case 'editar':
            include("editar-usuario.php");
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
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

            $sql = "UPDATE cadastrados SET
                            nome='{$nome}',
                            email='{$email}',
                            senha='{$senha}',
                            materno='{$materno}',
                            cpf='{$cpf}',
                            celular='{$celular}',
                            fixo='{$fixo}',
                            nascimento='{$nascimento}',
                            cep='{$cep}',
                            estado='{$estado}',
                            cidade='{$cidade}',
                            rua='{$rua}',
                            numero='{$numero}'
                    where
                            id=".$_REQUEST["id"];

            $res = $conn->query($sql);

             if($res==true){
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='listar.php';</script>";
            }else{
                echo "<script>alert('Erro');</script>";
                echo "<script>location.href='listar.php';</script>";
            }
        break;

        case 'excluir':
        break;  
        
    }
?>
