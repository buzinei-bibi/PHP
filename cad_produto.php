<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <h1 class="text-2xl font-bold bg-purple-500 text-white flex flex-col justify-center items-center h-10">
        formulário de produtos
    </h1>

    <?php
    if ($_POST) {
        echo "<p></p>";
        $nome_produto = $_POST['nome_produto'];
        $descrição = $_POST['descrição'];
        $categoria = $_POST['categoria'];
        $preço = $_POST['preço'];
        $quantidade = $_POST['quantidade disponível'];
        $produto_ativo = $_POST['produto'];
    }
    ?>

    <form method="POST" action="salva_produto.php" class="container mx-auto p-4 bg-pink-200 rounded-lg shadow-m border border-black">
        <label>nome do produto:</label>
        <input name="nome_produto"
            required
            minlength="3"
            placeholder="digite o nome do produto"
            class="border border-black rounded p-1 w-50">
        <br>

        <label>descrição:</label>
        <textarea name="descrição"
            maxlength="200"
            placeholder=""
            rows="4"
            class="border border-black rounded p-1">
        </textarea>

        <label>categoria:</label>
        <select name="categoria" 
            required
            placeholder=""
            class="border border-black rounded p-1">

        <option value="" >seleciona uma categoria</option>

        </select>

        <label>preço:</label>
        <input name="preço"
            placeholder="00,00"
            class="border border-black rounded p-1">
        <br>

        <label>quantidade:</label>
        <input name="quantidade"
            required
            placeholder="0"
            class="border border-black rounded p-1">
        <br>

        <label>produto ativo:</label>
        <input name="produto ativo"
            placeholder=""
            class="border border-black rounded p-1">
        <br>

        <button type="submit" class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
            enviar
        </button>
    </form>

</body>
</html>