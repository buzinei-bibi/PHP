<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = trim($_POST['cliente'] ?? '');
    $produto = trim($_POST['produto'] ?? '');
    $valor = trim($_POST['valor'] ?? '');
    $quantidade = trim($_POST['quantidade'] ?? '');
    $pagamento = trim($_POST['pagamento'] ?? '');
    $observação = trim($_POST['observação'] ?? '');
    $status = trim($_POST['status'] ?? '');

    if (empty($cliente)) {
        echo "<p>'cliente' é obrigatório </p>";
        exit;
    } else {
        if (strlen($cliente) < 3) {
            echo "<p>'cliente' deve ter no mínimo 3 caracteres </p>";
            exit;
        }
    }

    if (empty($produto)) {
        echo "<p>'produto' é obrigatório </p>";
        exit;
    } else {
        if (strlen($produto) < 3) {
            echo "<p>'produto' deve ter no mínimo 3 caracteres </p>";
            exit;
        }
    }

    if ($valor === '') {
        echo "<p>'valor' é obrigatório </p>";
        exit;
    } else {
        if (!is_numeric($valor) || $valor < 0.01) {
            echo "<p>'valor' deve ser no mínimo 0,01 </p>";
            exit;
        }
    }

    if ($quantidade === '') {
        echo "<p>'quantidade' é obrigatório </p>";
        exit;
    } else {
        if (!is_numeric($quantidade) || $quantidade < 1) {
            echo "<p>a 'quantidade' deve ser no mínimo 1 </p>";
            exit;
        }
    }

    if (empty($pagamento)) {
        echo "<p>'pagamento' é obrigatório </p>";
        exit;
    } else {
        $formas_pagamento = ['dinheiro', 'pix', 'cartao_credito', 'cartao_debito', 'boleto'];
        if (!in_array($pagamento, $formas_pagamento)) {
            echo "<p>'pagamento' inválido </p>";
            exit;
        }
    }

    if (strlen($observação) > 200) {
        echo "<p>'observação' deve ter no máximo 200 caracteres </p>";
        exit;
    }

    if (empty($status)) {
        echo "<p>'status' é obrigatório </p>";
        exit;
    } else {
        $status_validos = ['pendente', 'em andamento', 'concluído'];
        if (!in_array($status, $status_validos)) {
            echo "<p>'status' inválido </p>";
            exit;
        }
    }

    echo "
            <h1>dados recebidos:</h1>
            <p>cliente: " . htmlspecialchars($cliente) . " </p>
            <p>produto: " . htmlspecialchars($produto) . " </p>
            <p>valor: " . htmlspecialchars($valor) . " </p>
            <p>quantidade: " . htmlspecialchars($quantidade) . " </p>
            <p>pagamento: " . htmlspecialchars($pagamento) . " </p>
            <p>observação: " . htmlspecialchars($observação) . " </p>
            <p>status: " . htmlspecialchars($status) . " </p>
        ";
} else {
    header('Location: ./pedidos.php');
    exit;
}
