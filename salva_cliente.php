<?php
 
 if ($_POST) {
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

     // aqui você pode adicionar o código para salvar os dados no banco de dados ou em um arquivo

     echo "<h1>cliente cadastrado com sucesso!</h1>";
    echo "<p>nome: $nome</p>";
    echo "<p>data de nascimento: $data_nascimento</p>";
    echo "<p>e-mail: $email</p>";
    echo "<p>whatsapp: $whatsapp</p>";
    echo "<p>endereço completo: $logradouro, $número, $complemento, $bairro, $cidade, $estado, $cep</p>";

}