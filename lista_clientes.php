<?php

$clientes = [
    [
        'id' => 1,
        'nome' => 'buzina de bibi',
        'nascimento' => '22/02/2006',
        'cpf' => '123.456.789-00',
        'whatsapp' => '(11) 91234-5678'
    ],
    [
        'id' => 2,
        'nome' => 'buzinei',
        'nascimento' => '22/02/2006',
        'cpf' => '123.456.789-00',
        'whatsapp' => '(11) 91234-5678'
    ],
    [
        'id' => 3,
        'nome' => 'buzinando',
        'nascimento' => '22/02/2006',
        'cpf' => '123.456.789-00',
        'whatsapp' => '(11) 91234-5678'
    ]
];
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>lista de pedidos</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto px-6 py-10">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">pedidos</h1>
                <p class="text-sm text-slate-500 mt-1">gerencie os pedidos cadastrados no sistema</p>
            </div>
            <a href="cad_pedidos.php"
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
                            <th class="px-5 py-3 font-medium text-slate-500">nome</th>
                            <th class="px-5 py-3 font-medium text-slate-500">nascimento</th>
                            <th class="px-5 py-3 font-medium text-slate-500">cpf</th>
                            <th class="px-5 py-3 font-medium text-slate-500">whatsapp</th>
                            <th class="px-5 py-3 font-medium text-slate-500">ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($clientes as $item) {
                            echo '
                            <tr>
                            <td class="px-5 py-3 text-slate-400">' . $item['id'] . '</td>
                                <td class="px-5 py-3 text-slate-700">' . $item['nome'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['nascimento'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['cpf'] . '</td>
                                <td class="px-5 py-3 text-slate-600">' . $item['whatsapp'] . '</td>
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

                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-5 py-3 text-slate-400">1</td>
                            <td class="px-5 py-3 text-slate-700">buzina de bibi</td>
                            <td class="px-5 py-3 text-slate-600">22/02/2006</td>
                            <td class="px-5 py-3 text-slate-600">123.456.789-00</td>
                            <td class="px-5 py-3 text-slate-600">(11) 91234-5678</td>
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>