<?php
$cepData = null;
$cnpjData = null;

if (isset($_POST['buscarCep'])) {
    $cep = $_POST['cep'];

    $url = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $cepData = json_decode($response, true);
}

if (isset($_POST['buscarCnpj'])) {
    $cnpj = $_POST['cnpj'];

    $url = "https://receitaws.com.br/v1/cnpj/$cnpj";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $cnpjData = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>

<body>

    <h2>Cadastro de Pessoa</h2>

    <form method="POST">

        <h3>Dados Pessoais</h3>

        <label>Nome*:</label>
        <input type="text" name="nome_usuario" required
            value="<?= $_POST['nome_usuario'] ?? '' ?>">
        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone_usuario"
            value="<?= $_POST['telefone_usuario'] ?? '' ?>">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email_usuario"
            value="<?= $_POST['email_usuario'] ?? '' ?>">
        <br><br>

        <hr>

        <h3>Dados da Empresa</h3>

        <label>CNPJ:</label>
        <input type="text" name="cnpj"
            value="<?= $_POST['cnpj'] ?? '' ?>">
        <button type="submit" name="buscarCnpj">Buscar CNPJ</button>
        <br><br>

        <label>Nome Empresa:</label>
        <input type="text" name="nome_empresa" readonly
            value="<?= $cnpjData['nome'] ?? $_POST['nome_empresa'] ?? '' ?>">
        <br><br>

        <label>Fantasia:</label>
        <input type="text" name="fantasia" readonly
            value="<?= $cnpjData['fantasia'] ?? $_POST['fantasia'] ?? '' ?>">
        <br><br>

        <label>Telefone Empresa:</label>
        <input type="text" name="telefone_empresa" readonly
            value="<?= $cnpjData['telefone'] ?? $_POST['telefone_empresa'] ?? '' ?>">
        <br><br>

        <hr>

        <h3>Endereço</h3>

        <label>CEP:</label>
        <input type="text" name="cep"
            value="<?= $_POST['cep'] ?? '' ?>">
        <button type="submit" name="buscarCep">Buscar CEP</button>
        <br><br>

        <label>Rua:</label>
        <input type="text" name="rua" readonly
            value="<?= $cepData['logradouro'] ?? $_POST['rua'] ?? '' ?>">
        <br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" readonly
            value="<?= $cepData['bairro'] ?? $_POST['bairro'] ?? '' ?>">
        <br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" readonly
            value="<?= $cepData['localidade'] ?? $_POST['cidade'] ?? '' ?>">
        <br><br>

        <label>Estado:</label>
        <input type="text" name="estado" readonly
            value="<?= $cepData['uf'] ?? $_POST['estado'] ?? '' ?>">
        <br><br>

        <hr>

        <button type="submit" formaction="resultado.php">
            Cadastrar Pessoa
        </button>

    </form>

</body>

</html>