<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>registro de clientes</title>
</head>
<body>
    <h1 class="text-2xl font-bold bg-purple-500 text-white flex flex-col justify-center items-center h-10">
    CADASTRO DE CLIENTE
    </h1>



    <?php
    if ($_POST) {
        echo "<p></p>";
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['e-mail'];
        $whatsapp = $_POST['whatsapp'];
        $logradouro = $_POST['logradouro'];
        $número = $_POST['número'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
    }
    ?>

    <form method="POST" action="salva_cliente.php" class="container mx-auto p-4 bg-pink-200 rounded-lg shadow-m border border-black">
        <label>nome:</label>
        <input name="nome" placeholder="digite seu nome" class="border border-black rounded p-1">
        <br>

        <label>data de nascimento:</label>
        <input type="date" name="data_nascimento" class="border border-black rounded p-1">
        <br>

        <label>cpf:</label>
        <input name="cpf" placeholder="0000.000.000-00" class="border border-black rounded p-1">
        <br>

        <label>e-mail:</label>
        <input type="email" name="e-mail" placeholder="seu@email.com" class="border border-black rounded p-1">
        <br>

        <label>whatsapp:</label>
        <input name="whatsapp" placeholder="(000) 00000-0000" class="border border-black rounded p-1">
        <br>

        <label>endereço completo:</label>
        <input name="logradouro" placeholder="rua, avenida, etc." class="border border-black rounded p-1">
        <input name="número" placeholder="número" class="border border-black rounded p-1">
        <input name="complemento" placeholder="bloco, apartamento, etc." class="border border-black rounded p-1">
        <input name="bairro" placeholder="digite seu bairro" class="border border-black rounded p-1">
        <input name="cidade" placeholder="digite sua cidade" class="border border-black rounded p-1">
        <input name="estado" placeholder="digite seu estado" class="border border-black rounded p-1">
        <input name="cep" placeholder="00000-000" class="border border-black rounded p-1">
        <br>

        <button type="submit" class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
            enviar
        </button>
    </form>

</body>
</html>