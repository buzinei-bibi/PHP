 <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p></p>";
        $nome_produto = trim($_POST['nome_produto'] ?? '');
        $descrição = trim($_POST['descrição']) ?? '';
        $categoria = (trim($_POST['categoria'])) ?? '';
        $preço = trim($_POST['preço']) ?? '';
        $quantidade = trim($_POST['quantidade']) ?? '';
        $produto_ativo = trim($_POST['produto_ativo'] ?? '' ) ;
    } else {
        $nome_produto = '';
        $descrição = '';
        $categoria = '';
        $preço = '';
        $quantidade = '';
        $produto_ativo = '';
    }

    if (empty($nome_produto) || (strlen($nome_produto) < 3 )) {
        echo "<p> campo 'nome do produto' é obrigatório </p>";
        exit;
    }

    if (strlen($descrição) > 200) {
        echo "<p> descrição deve ter no máximo 200 caracteres </p>";
        exit;
    }

    if (empty($preço) || !is_numeric($preço) || $preço < 0) {
        echo "<p> campo 'preço' é obrigatório </p>";
        exit;
    }

    if (empty($quantidade) || $quantidade < 0 || !is_numeric($quantidade)) {
        echo "<p> campo 'quantidade' é obrigatório </p>";
        exit;
    }
    
    if (empty($produto_ativo) || !in_array($produto_ativo, ['sim', 'não'])) {
        echo "<p> campo 'produto' é obrigatório </p>";
        exit;
    }

    header('Location:./cad_produto.php');