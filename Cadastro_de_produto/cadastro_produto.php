<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_produtos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome_produto = $_POST['nome_produto'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];
    $codigo_produto = $_POST['codigo_produto'];
    $nome_fornecedor = $_POST['nome_fornecedor'];

    // Preparar e executar a consulta SQL
    $sql = "INSERT INTO produtos (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor)
            VALUES ('$nome_produto', '$preco_compra', '$preco_venda', '$codigo_produto', '$nome_fornecedor')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
