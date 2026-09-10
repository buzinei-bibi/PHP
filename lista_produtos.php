<?php

$produtos = [
    [
        'id' => 1,
        'produto' => 'monster branco',
        'descrição' => '',
        'categoria' => '',
        'quantidade' => '',
        'preço' => 10.00,
        'ativo' => true,
    ],
    [
        'id' => 2,
        'produto' => 'monster mango',
        'descrição' => '',
        'categoria' => '',
        'quantidade' => '',
        'preço' => 15.00,
        'ativo' => false,
    ],
    [
        'id' => 3,
        'produto' => 'monster ultra',
        'descrição' => '',
        'categoria' => '',
        'quantidade' => '',
        'preço' => 20.00,
        'ativo' => true,
    ]
];
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>produtos</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto px-6 py-10">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">produtos</h1>
                <p class="text-sm text-slate-500 mt-1">gerencie os produtos cadastrados no sistema</p>
            </div>
            <a href="cad_produto.php"
                class="inline-flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-900 text-white text-sm font-medium py-2.5 px-5 rounded-lg transition-colors shadow-sm">
                novo produto
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-5 py-3 font-medium text-slate-500">id</th>
                            <th class="px-5 py-3 font-medium text-slate-500">produto</th>
                            <th class="px-5 py-3 font-medium text-slate-500">descrição</th>
                            <th class="px-5 py-3 font-medium text-slate-500">categoria</th>
                            <th class="px-5 py-3 font-medium text-slate-500">quantidade</th>
                            <th class="px-5 py-3 font-medium text-slate-500">preço</th>
                            <th class="px-5 py-3 font-medium text-slate-500">ativo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $item): ?>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-5 py-3 text-slate-400"><?= htmlspecialchars((string) $item['id']) ?></td>
                                <td class="px-5 py-3 text-slate-700"><?= htmlspecialchars($item['produto']) ?></td>
                                <td class="px-5 py-3 text-slate-600"><?= htmlspecialchars($item['descrição']) ?></td>
                                <td class="px-5 py-3 text-slate-600"><?= htmlspecialchars((string) $item['categoria']) ?></td>
                                <td class="px-5 py-3 text-slate-600"><?= htmlspecialchars((string) $item['quantidade']) ?></td>
                                <td class="px-5 py-3 text-slate-600">R$ <?= number_format($item['preço'], 2, ',', '.') ?></td>
                                <td class="px-5 py-3 text-slate-600"><?= $item['ativo'] ? 'sim' : 'não' ?></td>
                                <td class="px-5 py-3">
                                    <div class="flex justify-end gap-2">
                                        <a href="editar_produto.php?id=<?= (int) $item['id'] ?>"
                                            class="text-slate-600 hover:text-slate-900 hover:bg-slate-100 text-xs font-medium py-1.5 px-3 rounded-md border border-slate-200 transition-colors">
                                            editar
                                        </a>
                                        <a href="excluir_produto.php?id=<?= (int) $item['id'] ?>"
                                            class="text-red-600 hover:text-white hover:bg-red-600 text-xs font-medium py-1.5 px-3 rounded-md border border-red-200 transition-colors">
                                            excluir
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>