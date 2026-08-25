<?php


$time = 10000000 ;
echo date('d/m/y  h:i:s' , strtotime('2006-02-22'));


if (isset($_POST)) {
    $nome = strtoupper(trim($_POST['nome'])) ?? '';
    $data_nascimento = trim($_POST['data_nascimento']) ?? '';
    $email = trim($_POST['e-mail']) ?? '';
    $cpf = trim($_POST['cpf']) ?? '';
    $whatsapp = trim($_POST['whatsapp']) ?? '';  // se o campo não for preenchido, atribui uma string vazia
    $logradouro = trim($_POST['logradouro']) ?? '';
    $número = trim($_POST['número']) ?? '';
    $complemento = trim($_POST['complemento']) ?? '';
    $bairro = trim($_POST['bairro']) ?? '';
    $cidade = trim($_POST['cidade']) ?? '';
    $estado = trim($_POST['estado']) ?? '';
    $cep = trim($_POST['cep']) ?? '';

    // validar os dados 

    if (empty($nome)) {
        echo "<p> campo 'nome' é obrigatório </p>";
        exit;
    } else {
        $sobrenome = explode(" ", $nome);
        if (count($sobrenome) < 2) {
            echo "<p> 'nome' e 'sobrenome' são obrigatórios </p>";
            exit;
        }
    }

    if (empty($data_nascimento)) {
        echo "<p> campo 'data_nascimento' é obrigatório </p>";
        exit;
    }

    // converter data nascimento em segundos

    else {
        $nascimento = strtotime($data_nascimento); // obter data atual em segundos
        $hoje = strtotime(date('y-m-d'));
        if ($nascimento > $hoje) {
            echo "<p>data de nascimento não pode ser maior que a data atual</p>";
            exit;
        }
    }

    if (empty($cpf)) {
        echo "<p> campo 'cpf' é obrigatório </p>";
        exit;
    }

    else {
        if (strlen($cpf) !== 11) {
            echo "<p>data de nascimento não pode ser maior que a data atual</p>";
            exit;
        }

    if (strlen($whatsapp) !== 10 && strlen($whatsapp) !== 11) {
        echo "<p> whatsapp deve ter 10 ou 11 digítos </p>";
        exit;
    }


    if (empty($logradouro)) {
        echo "<p> campo 'logradouro' é obrigatório </p>";
        exit;
    }

    if (empty($número)) {
        echo "<p> campo 'número' é obrigatório </p>";
        exit;
    }

    if (empty($bairro)) {
        echo "<p> campo 'bairro' é obrigatório </p>";
        exit;
    }

    if (empty($cidade)) {
        echo "<p> campo 'cidade' é obrigatório </p>";
        exit;
    }

    if (empty($estado)) {
        echo "<p> campo 'estado' é obrigatório </p>";
        exit;
    }

    if (empty($cep)) {
        echo "<p> campo 'cep' é obrigatório </p>";
        exit;
    }

    // explode - separar nome e sobrenome 
    // vetor - é uma variável com várias partições 
    // trim () remove espaços em branco antes e depois da string 
    // aqui você pode adicionar o código para salvar os dados no banco de dados ou em um arquivo
    // isset - verifica se a variável está definida e não é nula

    echo "<h1>cliente cadastrado com sucesso!</h1>";
    echo "<p>nome: $nome</p>";
    echo "<p>data de nascimento: $data_nascimento</p>";
    echo "<p>e-mail: $email</p>";
    echo "<p>whatsapp: $whatsapp</p>";
    echo "<p>endereço completo: $logradouro, $número, $complemento, $bairro, $cidade, $estado, $cep</p>";
}