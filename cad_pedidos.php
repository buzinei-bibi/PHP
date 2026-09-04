<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedidos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-black min-h-screen font-sans text-white">

    <h1 class="text-2xl font-bold bg-black text-white flex flex-col justify-center items-center h-10">
        formulário de pedidos
    </h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p></p>";
        $cliente = $_POST['cliente'] ?? '';
        $produto = $_POST['produto'] ?? '';
        $valor = $_POST['valor'] ?? '';
        $desconto = $_POST['desconto'] ?? '';
        $quantidade = $_POST['quantidade'] ?? '';
        $pagamento = $_POST['pagamento'] ?? '';
        $observação = $_POST['observação'] ?? '';
        $status = $_POST['status'] ?? '';
    }
    ?>

    <main class="max-w-xl w-full mx-auto px-4 py-10">
        <form method="POST" action="salva_pedidos.php" class="bg-red-950 rounded-lg shadow-md border border-black p-6 space-y-5">

            <div class="flex flex-col justify-center items-center">
                <label class="font-semibold mb-1">cliente:</label>
                <input name="cliente"
                    required
                    lista de clientes
                    placeholder="digite o nome do cliente"
                    class="border border-black rounded p-2 w-full">
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1">observação </label>
                <input name="observação"
                    type="text"
                    rows="4"
                    maxlength="200"
                    placeholder="observações adicionais"
                    class="border border-black rounded p-2 w-full resize-none">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1">valor:</label>
                    <select name="valor"
                        class="border border-black rounded p-2 w-full">
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1">desconto:</label>
                    <select name="desconto"
                        class="border border-black rounded p-2 w-full">
                    </select>
                </div>
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1">quantidade:</label>
                <input name="quantidade"
                    type="number"
                    required
                    placeholder="0"
                    class="border border-black rounded p-2 w-full">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1">pagamento:</label>
                    <input name="pagamento"
                        type="number"
                        required
                        step="0.01"
                        placeholder="00,00"
                        class="border border-black rounded p-2 w-full">
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1">produto:</label>
                    <input name="produto"
                        type="text"
                        required
                        placeholder="digite o nome do produto"
                        class="border border-black rounded p-2 w-full resize-none">

                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1">status:</label>
                    <select name="status"
                        class="border border-black rounded p-2 w-full">
                        <option value="pendente">pendente</option>
                        <option value="em andamento">em andamento</option>
                        <option value="concluído">concluído</option>
                    </select>

                    <button type="submit" class="w-full bg-red-800 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">
                        enviar
                    </button>

        </form>
    </main>

</body>

</html>