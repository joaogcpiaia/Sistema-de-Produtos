<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<nav class="bg-blue-500 text-white py-4">
    <div class="container mx-auto">
        <ul class="flex justify-center flex-wrap">
            <li class="mx-4 my-2"><a href="lista_produtos.php" class="hover:text-gray-300">Lista de Produtos</a></li>
            <li class="mx-4 my-2"><a href="cadastro_usuarios.html" class="hover:text-gray-300">Cadastro de Usuários</a></li>
            <li class="mx-4 my-2"><a href="cadastro_produtos_front.php" class="hover:text-gray-300">Cadastro de Produtos</a></li>
            <li class="mx-4 my-2"><a href="cadastro_fornecedores.html" class="hover:text-gray-300">Cadastro de Fornecedores</a></li>
            <li class="mx-4 my-2"><a href="cesta_compras.html" class="hover:text-gray-300">Cesta de Compras</a></li>
        </ul>
    </div>
</nav>

    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="border-double border-4 border-black rounded-lg shadow-md">
                    <div class="p-4 border-b">
                        <h1 class="font-bold">Lista de Produtos</h1>
                    </div>
                    <div class="p-4">
                        <button onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>
                        <ul id="lista-produtos" class="space-y-2">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function carregarProdutos() {
            fetch('obter_produtos.php')
                .then(response => response.json())
                .then(produtos => {
                    $('#lista-produtos').empty();
                    produtos.forEach(produto => {
                        $('#lista-produtos').append(`<li class="flex items-center">
                                                        <input type="checkbox" class="mr-2" value="${produto.id}">
                                                        <div class="font-semibold mr-2">${produto.nome}:</div>
                                                        <div class="text-green-500 font-semibold mr-2">${produto.preco}</div>
                                                        <span class="text-gray-500">(Fornecedor: ${produto.nome_fornecedor} )</span></li>`);
                    });
                })
                .catch(error => console.error('Erro ao carregar produtos:', error));
        }

        function adicionarAoCarrinho() {
            const produtosSelecionados = [];
            $('input[type="checkbox"]:checked').each(function() {
                produtosSelecionados.push($(this).val());});
            console.log(JSON.stringify(produtosSelecionados));

            if (produtosSelecionados.length === 0) {
                alert('Selecione pelo menos um produto para adicionar ao carrinho.');
                return;}
            fetch('adicionar_ao_carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ produtos: produtosSelecionados }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                    } else {
                        alert('Erro ao adicionar produtos ao carrinho.');}
                })
                .catch(error => console.error('Erro ao adicionar produtos ao carrinho:', error));
        }

        $(document).ready(function () {
            carregarProdutos();
        });
    </script>
</body>

</html>
