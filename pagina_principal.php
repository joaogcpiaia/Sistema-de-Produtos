<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Sistema de Gestão de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8 mt-4">
    <div class="bg-white border-double border-4 border-black rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-4 text-blue-500">Página Principal</h1>
        <p class="mb-4">Esta é a página principal do sistema de gestão de produtos.</p>
        <ul class="list-disc pl-4 mb-4">
            <li><a href="cadastro_produtos_front.php" class="text-blue-500 hover:underline">Cadastrar Produtos</a></li>
            <li><a href="cadastro_fornecedores.html" class="text-blue-500 hover:underline">Cadastrar Fornecedores</a></li>
            <li><a href="lista_produtos.php" class="text-blue-500 hover:underline">Ver Produtos</a></li>
        </ul>
        <a href="logout.php" class="text-red-500 hover:underline">Logout</a>
    </div>
</body>

</html>