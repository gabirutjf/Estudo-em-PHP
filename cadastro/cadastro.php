<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body{background-color: black;}
        main{background-color: white; max-width: 600px; height: 700px; margin: auto;
            border-radius: 10px;}
        .cadastro{display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center;}
        label{display: flex; justify-content: center; align-items: center; flex-direction: column;}
        
    </style>
</head>
<body>
    <main>
        <form class="cadastro" action="" method="post">
            <h1>Cadastre-se</h1>
            <label for="nome">
                Nome <input type="text" name="nome" placeholder="Digite seu nome">
            </label>

            <label for="nascimento">
                Data de Nascimento <input type="datetime" name="nascimento" placeholder="Data de nascimento">
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

            <label for="bairro">
                Bairro <input type="text" name="bairro" placeholder="Digite seu bairro">
            </label>

            <label for="rua">
                Rua <input type="text" name="rua" placeholder="Digite sua rua">
            </label>

            <label for="numero">
                Número <input type="number" name="numero" placeholder="Número da residência">
            </label>
            <br>
            <input type="button" name="btn_cadastro" value="Cadastrar">
        </form>
    </main>
    <a href="../login/login.php">voltar</a>
</body>
</html>