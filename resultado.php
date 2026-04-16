<?php
$nomeUsuario = $_POST['nome_usuario'] ?? '';
$telefoneUsuario = $_POST['telefone_usuario'] ?? '';
$emailUsuario = $_POST['email_usuario'] ?? '';

$cnpj = $_POST['cnpj'] ?? '';
$nomeEmpresa = $_POST['nome_empresa'] ?? '';
$fantasia = $_POST['fantasia'] ?? '';
$telefoneEmpresa = $_POST['telefone_empresa'] ?? '';

$cep = $_POST['cep'] ?? '';
$rua = $_POST['rua'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>

    <h2>Pessoa cadastrada com sucesso!</h2>

    <h3>Dados do Usuário</h3>
    <p><b>Nome:</b> <?= $nomeUsuario ?></p>
    <p><b>Telefone:</b> <?= $telefoneUsuario ?></p>
    <p><b>Email:</b> <?= $emailUsuario ?></p>

    <hr>

    <h3>Empresa</h3>
    <p><b>CNPJ:</b> <?= $cnpj ?></p>
    <p><b>Nome:</b> <?= $nomeEmpresa ?></p>
    <p><b>Fantasia:</b> <?= $fantasia ?></p>
    <p><b>Telefone:</b> <?= $telefoneEmpresa ?></p>

    <hr>

    <h3>Endereço</h3>
    <p><b>CEP:</b> <?= $cep ?></p>
    <p><b>Rua:</b> <?= $rua ?></p>
    <p><b>Bairro:</b> <?= $bairro ?></p>
    <p><b>Cidade:</b> <?= $cidade ?></p>
    <p><b>Estado:</b> <?= $estado ?></p>

</body>

</html>