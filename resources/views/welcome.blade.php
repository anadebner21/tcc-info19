<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>

    <form action="/cadastrar-cliente" method="POST">

        @csrf
        <label for="">Nome:</label> 
        <input type="text" placeholder="Digite o nome do cliente ou empresa..." name="nome_cliente">
        <br /><br />
        <label for="">CPF/CNPJ</label>
        <input type="text" placeholder="Digite o CPF ou CNPJ..." name="cpf_cnpj_cliente">
        <br /><br />
        <label for="">Endereço</label>
        <input type="text" placeholder="Digite o endereço..." name="endereco_cliente">
        <br /><br />
        <label for="">Email</label>
        <input type="text" placeholder="Digite o email..." name="email_cliente">
        <br /><br />
        <label for="">Telefone</label>
        <input type="text" placeholder="Digite o telefone para contato..." name="telefone_cliente">
        <br /><br />

        <button>Enviar Cadastro</button>
    </form>
</body>
</html>