# Cadastro_de_produto

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Issues](https://img.shields.io/github/issues/H-Saimon/Cadastro_de_produto?style=for-the-badge)
![License](https://img.shields.io/github/license/H-Saimon/Cadastro_de_produto?style=for-the-badge)
![Last Commit](https://img.shields.io/github/last-commit/H-Saimon/Cadastro_de_produto?style=for-the-badge)
![Status](https://img.shields.io/badge/status-em_desenvolvimento-yellow?style=for-the-badge)

---

## 🚀 Descrição

O **Cadastro_de_produto** é uma aplicação web desenvolvida em PHP que oferece um sistema simples e funcional para o gerenciamento de produtos. Seu objetivo principal é facilitar o cadastro, visualização e manutenção dos dados básicos de produtos, atendendo a pequenos negócios, projetos acadêmicos ou desenvolvedores que desejam aprimorar habilidades em desenvolvimento PHP com operações CRUD (Create, Read, Update, Delete).

Este projeto resolve o problema da gestão eficiente de informações de produtos, trazendo uma interface prática e código organizado que pode servir como base para sistemas maiores. Desenvolvido com foco na simplicidade e extensibilidade, permite rápida configuração e customização conforme a necessidade do usuário.

---

## ✨ Funcionalidades

- Cadastro de novos produtos com campos básicos configurados via formulário em PHP.
- Listagem dinâmica dos produtos cadastrados, possibilitando fácil visualização.
- Estrutura preparada para futura implementação das operações de atualização e exclusão.
- Configuração centralizada para conexão de banco de dados via arquivo `config.php`.
- Interface web simples e direta, facilitando o uso por usuários sem familiaridade técnica avançada.
- Uso de PHP nativo, possibilitando fácil entendimento e manutenção do código.

---

## 🛠️ Tecnologias Utilizadas

- **PHP**: Linguagem principal para desenvolvimento backend e interface.
- **MySQL**: Banco de dados relacional para armazenamento dos produtos.
- **HTML5**: Estruturação das páginas web.
- **CSS3**: Estilização dos formulários e layout básico.

---

## 📁 Estrutura do Projeto

```
Cadastro_de_produto/
├── Cadastro_de_produto/
│   ├── cadastro_produto.php      # Script responsável pelo formulário e lógica de inserção de produtos
│   ├── config.php                # Arquivo de configuração da conexão com o banco de dados
│   └── index.php                 # Página inicial que lista os produtos cadastrados
└── README.md                     # Documentação do projeto
```

- **cadastro_produto.php**: Contém o formulário para inserção de novos produtos e o processamento dos dados enviados.
- **config.php**: Centraliza as configurações de acesso ao banco de dados, facilitando manutenção.
- **index.php**: Implementa a visualização dos produtos já cadastrados, exibindo os dados armazenados.

---

## ⚙️ Instalação e Execução

1. Clone o repositório:

```bash
git clone https://github.com/H-Saimon/Cadastro_de_produto.git
```

2. Navegue até o diretório do projeto:

```bash
cd Cadastro_de_produto/Cadastro_de_produto
```

3. Configure o arquivo `config.php` com suas credenciais de banco de dados MySQL:

```php
<?php
$host = 'localhost';
$username = 'seu_usuario';
$password = 'sua_senha';
$database = 'nome_do_banco';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
```

4. Importe a estrutura da tabela no seu banco MySQL (exemplo para tabela produtos):

```sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2),
    quantidade INT,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

5. Inicie um servidor web local que suporte PHP (exemplo com PHP embutido):

```bash
php -S localhost:8000
```

6. Acesse o sistema via navegador em `http://localhost:8000/index.php` para visualizar os produtos e em `http://localhost:8000/cadastro_produto.php` para cadastrar novos.

---

## 🛠️ Endpoints

Este projeto não implementa ainda uma API RESTful, portanto não possui endpoints formais. A interação ocorre via formulários tradicionais e páginas PHP.

---

## ✅ Testes

Não há testes automatizados configurados neste momento. Recomenda-se testes manuais das funcionalidades de cadastro e listagem navegando pelas páginas e verificando a persistência dos dados no banco MySQL.

---

## 🔐 Segurança

- Conexão com o banco de dados está centralizada, permitindo fácil aplicação de práticas seguras.
- Não há autenticação implementada, recomendando-se integração futura para controle de acesso.
- Validação básica de entrada deve ser feita nas páginas PHP para evitar inserção de dados inválidos ou ataques comuns, como SQL Injection e XSS.
- Sugere-se o uso preparado (Prepared Statements) no PHP para prevenção contra SQL Injection, ainda não aplicado.

---

## ☁️ Deploy

- A aplicação pode ser publicada em qualquer servidor web com suporte a PHP e MySQL.
- Não há container Docker oficial, porém pode ser containerizada com uma imagem padrão PHP-Apache ou PHP-FPM com MySQL.
- Para deploy simples:
  - Configure ambiente PHP+MySQL.
  - Transfira os arquivos e configure o banco pelo arquivo `config.php`.
  - Garanta permissões adequadas e segurança no servidor.

---

## 🚀 Melhorias Futuras

- Implementação completa das operações Update e Delete para o CRUD.
- Adoção de Prepared Statements para segurança aprimorada contra SQL Injection.
- Inclusão de autenticação e autorização para acesso restrito ao sistema.
- Melhoria da interface com uso de frameworks CSS ou front-end moderno.
- Implementação de testes automatizados (unitários e funcionais).
- Desenvolvimento de API RESTful para uso em serviços externos.
- Automatização do deploy usando Docker e integração contínua (CI/CD).
- Validação front-end para melhorar a experiência do usuário.

---

## 👨‍💻 Autor

Desenvolvido por **Hítalon Saimon Santos Silva**  
GitHub: https://github.com/H-Saimon