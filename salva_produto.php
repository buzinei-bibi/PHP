<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = trim($_POST['produto'] ?? '');
    $descrição = trim($_POST['descrição'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $preço = trim($_POST['preço'] ?? '');
    $quantidade = trim($_POST['quantidade'] ?? '');
    $ativo = trim($_POST['ativo'] ?? '');

    if (empty($produto)) {
        echo "<p>'nome do produto' é obrigatório </p>";
        exit;
    } else {
        if (strlen($produto) < 3) {
            echo "<p>'nome do produto' deve ter no mínimo 3 caracteres </p>";
            exit;
        }
    }

    if ($preço === '') {
        echo "<p>'preço' é obrigatório </p>";
        exit;
    } else {
        if (!is_numeric($preço) || $preço < 1) {
            echo "<p>'preço' deve ser no mínimo 1 real </p>";
            exit;
        }
    }

    if (strlen($descrição) > 200) {
        echo "<p>'descrição' deve ter no máximo 200 caracteres </p>";
        exit;
    }

    if (empty($categoria)) {
        echo "<p>'categoria' é obrigatório </p>";
        exit;
    } else {
        $categorias = ['hambúrguer', 'bebida', 'sobremesa', 'acompanhamento'];
        if (!in_array($categoria, $categorias)) {
            echo "<p>'categoria' inválida </p>";
            exit;
        }
    }

    if ($quantidade === '') {
        echo "<p>'quantidade' é obrigatório </p>";
        exit;
    } else {
        if (!is_numeric($quantidade) || $quantidade < 1) {
            echo "<p>a 'quantidade' deve ser no mínimo 1 produto</p>";
            exit;
        }
    }

    if (empty($ativo)) {
        echo "<p>produto precisa informar se 'ativo' ou não </p>";
        exit;
    }

    echo "
            <h1>dados recebidos:</h1>
            <p>nome do produto: " . htmlspecialchars($produto) . " </p>
            <p>descrição: " . htmlspecialchars($descrição) . " </p>
            <p>categoria do produto: " . htmlspecialchars($categoria) . " </p>
            <p>preço do produto: " . htmlspecialchars($preço) . " </p>
            <p>quantidade do produto: " . htmlspecialchars($quantidade) . " </p>
            <p>produto ativo?: " . htmlspecialchars($ativo) . " </p>
        ";
} else {
    header('Location: ./cad_produto.php');
    exit;
}
