<?php

$pedidos = [
    [
        'id' => 1,
        'produto' => 'x-salada',
        'valor' => '20,00',
        'quantidade' => '1',
        'pagamento' => 'débito',
        'observação' => 'sem cebola',
        'status' => 'em andamento',
    ],
    [
        'id' => 2,
        'produto' => 'x-bacon',
        'valor' => '15,00',
        'quantidade' => '2',
        'pagamento' => 'pix',
        'observação' => 'sem maionese',
        'status' => 'pendente',
    ],
    [
        'id' => 3,
        'produto' => 'x-tudo',
        'valor' => '30,00',
        'quantidade' => '1',
        'pagamento' => 'dinheiro',
        'observação' => 'sem ketchup',
        'status' => 'finalizado',
    ],
];
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>pedidos</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto px-6 py-10">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">pedidos</h1>
                <p class="text-sm text-slate-500 mt-1">gerencie os pedidos cadastrados no sistema</p>
            </div>
            <a href="cad_produto.php"
                class="inline-flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-900 text-white text-sm font-medium py-2.5 px-5 rounded-lg transition-colors shadow-sm">
                novo pedido
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-5 py-3 font-medium text-slate-500">id</th>
                            <th class="px-5 py-3 font-medium text-slate-500">produto</th>
                            <th class="px-5 py-3 font-medium text-slate-500">valor</th>
                            <th class="px-5 py-3 font-medium text-slate-500">quantidade</th>
                            <th class="px-5 py-3 font-medium text-slate-500">pagamento</th>
                            <th class="px-5 py-3 font-medium text-slate-500">observação</th>
                            <th class="px-5 py-3 font-medium text-slate-500">status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pedidos as $item) {
                            echo '
                            <tr>
                            <td class="px-5 py-3 text-slate-400">' . $item['id'] . '</td>
                                <td class="px-5 py-3 text-slate-700">' . $item['produto'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['valor'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['quantidade'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['pagamento'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['observação'] . '</td> 
                                <td class="px-5 py-3 text-slate-600">' . $item['status'] . '</td>
                                <td class="px-5 py-3">
                                 <div class="flex justify-end gap-2">
                                    <a href="editar_pedido.php?id=1"
                                        class="text-slate-600 hover:text-slate-900 hover:bg-slate-100 text-xs font-medium py-1.5 px-3 rounded-md border border-slate-200 transition-colors">
                                        editar
                                    </a>
                                    <a href="excluir_pedido.php?id=1"
                                        class="text-red-600 hover:text-white hover:bg-red-600 text-xs font-medium py-1.5 px-3 rounded-md border border-red-200 transition-colors">
                                        excluir
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            ';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>