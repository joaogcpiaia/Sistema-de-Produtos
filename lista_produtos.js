function carregarProdutos() {fetch('obter_produtos.php')
        .then(response => response.json())
        .then(produtos => {$('#lista-produtos').empty();
            produtos.forEach(produto => {
                const produtoItem = `
                    <li class="produto-item list-group-item">
                        <div class="produto-info">
                            <span class="produto-nome">${produto.nome}</span>: 
                            <span class="produto-preco">R$ ${produto.preco.toFixed(2)}</span>
                        </div>
                        <div class="produto-fornecedor">Fornecedor: <span>${produto.nome_fornecedor}</span></div>
                    </li>
                `;
                $('#lista-produtos').append(produtoItem);
            });
        })
        .catch(error => console.error('Erro ao carregar produtos:', error));
}
function carregarFornecedores() {
    fetch('obter_fornecedores.php')
        .then(response => response.json())
        .then(fornecedores => {
            fornecedores.forEach(fornecedor => {
                $('#lista-fornecedores').append(`<li>${fornecedor.nome}: ${fornecedor.contato}</li>`);});
     })
        .catch(error => console.error('Erro ao carregar fornecedores:', error));}

$(document).ready(function() {
    carregarProdutos();
    carregarFornecedores();
});
