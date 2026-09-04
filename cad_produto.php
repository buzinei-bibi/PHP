<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-black min-h-screen font-sans">

    <h1 class="text-2xl font-bold bg-black text-white flex flex-col justify-center items-center h-10">
        formulário de produtos
    </h1>

    <?php
    if ($_POST) {
        echo "<p></p>";
        $nome_produto = $_POST['nome_produto'];
        $descrição = $_POST['descrição'];
        $categoria = $_POST['categoria'];
        $preço = $_POST['preço'];
        $quantidade = $_POST['quantidade'];
        $produto_ativo = $_POST['produto_ativo'];
    }
    ?>

    <main class="max-w-xl w-full mx-auto px-4 py-10">

        <form method="POST" action="salva_produto.php" class="bg-pink-200 rounded-lg shadow-md border border-black p-6 space-y-5">

            <div class="flex flex-col justify-center items-center">
                <label class="font-semibold mb-1">nome do produto:</label>
                <input name="nome_produto"
                    required
                    minlength="3"
                    placeholder="digite o nome do produto"
                    class="border border-black rounded p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1">descrição:</label>
                <textarea name="descrição"
                    maxlength="200"
                    placeholder="ingredientes, tamanho ou detalhes do prato..."
                    rows="4"
                    class="border border-black rounded p-2 w-full resize-none"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1">categoria:</label>
                    <select name="categoria"
                        required
                        class="border border-black rounded p-2 w-full">
                        <option value="">selecione uma categoria</option>
                        <option value="hambúrguer">hambúrguer</option>
                        <option value="bebida">bebida</option>
                        <option value="sobremesa">sobremesa</option>
                        <option value="acompanhamento">acompanhamento</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1">produto ativo:</label>
                    <select name="produto_ativo"
                        class="border border-black rounded p-2 w-full">
                        <option value="sim">disponível (sim)</option>
                        <option value="não">indisponível (não)</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1">preço:</label>
                    <input name="preço"
                        type="number"
                        step="0.01"
                        placeholder="00,00"
                        class="border border-black rounded p-2 w-full">
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1">quantidade:</label>
                    <input name="quantidade"
                        type="number"
                        required
                        placeholder="0"
                        class="border border-black rounded p-2 w-full">
                </div>
            </div>

            <button type="submit" class="w-full bg-purple-800 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded">
                enviar
            </button>

        </form>
    </main>

</body>

</html>