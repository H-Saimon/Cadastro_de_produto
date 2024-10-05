<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="cadastro_produto.php" method="POST">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required><br><br>

        <label for="preco_compra">Preço de Compra:</label>
        <input type="number" id="preco_compra" name="preco_compra" step="0.01" required><br><br>

        <label for="preco_venda">Preço de Venda:</label>
        <input type="number" id="preco_venda" name="preco_venda" step="0.01" required><br><br>

        <label for="codigo_produto">Código do Produto:</label>
        <input type="text" id="codigo_produto" name="codigo_produto" required><br><br>

        <label for="nome_fornecedor">Nome do Fornecedor:</label>
        <input type="text" id="nome_fornecedor" name="nome_fornecedor" required><br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>
