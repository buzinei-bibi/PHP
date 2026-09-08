<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedidos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-white h-screen font-sans text-black">

    <h1 class="text-2xl font-bold bg-blue-300 text-black flex flex-col justify-center items-center h-10">
        formulário de pedidos
    </h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cliente      = $_POST['cliente'] ?? '';
        $produto      = $_POST['produto'] ?? '';
        $valor        = $_POST['valor'] ?? '';
        $desconto     = $_POST['desconto'] ?? '';
        $quantidade   = $_POST['quantidade'] ?? '';
        $pagamento    = $_POST['pagamento'] ?? '';
        $observacao   = $_POST['observação'] ?? '';
        $status       = $_POST['status'] ?? '';
    }
    ?>

    <main class="max-w-xl w-full mx-auto px-4 py-10">
        <form method="POST" action="salva_pedidos.php" class="bg-blue-300 rounded-lg shadow-md border border-black p-6 space-y-5">

            <div class="flex flex-col justify-center items-center">
                <label class="font-semibold mb-1" for="cliente">cliente:</label>
                <input name="cliente"
                    id="cliente"
                    type="text"
                    required
                    list="clientes-lista"
                    placeholder="digite o nome do cliente"
                    class="border border-black rounded p-2 w-full">
                <datalist id="clientes-lista">
                </datalist>
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1" for="observação">observação:</label>
                <textarea name="observacao"
                    id="observacao"
                    rows="4"
                    maxlength="200"
                    placeholder="observações adicionais"
                    class="border border-black rounded p-2 w-full resize-none"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1" for="valor">valor unitário:</label>
                    <input name="valor"
                        id="valor"
                        type="number"
                        step="0.01"
                        min="0"
                        required
                        placeholder="00,00"
                        class="border border-black rounded p-2 w-full">
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1" for="desconto">desconto:</label>
                    <select name="desconto"
                        id="desconto"
                        class="border border-black rounded p-2 w-full">
                        <option value="0">sem desconto</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1" for="quantidade">quantidade:</label>
                <input name="quantidade"
                    id="quantidade"
                    type="number"
                    min="1"
                    required
                    placeholder="0"
                    class="border border-black rounded p-2 w-full">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="font-semibold mb-1" for="pagamento">forma de pagamento:</label>
                    <select name="pagamento"
                        id="pagamento"
                        required
                        class="border border-black rounded p-2 w-full">
                        <option value="">selecione</option>
                        <option value="dinheiro">dinheiro</option>
                        <option value="pix">pix</option>
                        <option value="cartao_credito">cartão de crédito</option>
                        <option value="cartao_debito">cartão de débito</option>
                        <option value="boleto">boleto</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="font-semibold mb-1" for="produto">produto:</label>
                    <input name="produto"
                        id="produto"
                        type="text"
                        required
                        placeholder="digite o nome do produto"
                        class="border border-black rounded p-2 w-full">
                </div>
            </div>

            <div class="flex flex-col">
                <label class="font-semibold mb-1" for="status">status:</label>
                <select name="status"
                    id="status"
                    class="border border-black rounded p-2 w-full">
                    <option value="pendente">pendente</option>
                    <option value="em andamento">em andamento</option>
                    <option value="concluído">concluído</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-2 rounded">
                enviar
            </button>

        </form>
    </main>

</body>

</html>