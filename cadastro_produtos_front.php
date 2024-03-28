<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="border-double border-4 border-black rounded-lg shadow-md">
                    <div class="p-4 border-b">
                        Cadastro de Produtos
                    </div>
                    <div class="p-4">
                        <form id="cadastroProdutosForm" action="cadastro_produtos.php" method="POST">
                            <div class="mb-4">
                                <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
                                <input type="text" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="nome" name="nome" required>
                            </div>
                            <div class="mb-4">
                                <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
                                <input type="text" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="preco" name="preco" required>
                            </div>
                            <div class="mb-4">
                                <label for="fornecedor" class="block text-sm font-medium text-gray-700">Fornecedor</label>
                                <select class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="fornecedor" name="fornecedor_id" required>
                                    <option value="">Selecione um fornecedor</option>
                                    <?php
                                    require_once 'cadastro_produtos.php';                                    
                                     foreach ($fornecedores as $fornecedor) : ?>
                                        <option value="<?= $fornecedor['id'] ?>"><?= $fornecedor['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Cadastrar Produto
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
