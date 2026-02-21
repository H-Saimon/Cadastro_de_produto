```markdown
# 🛒 Cadastro de Produto

## 🚀 Descrição

O **Cadastro de Produto** é uma aplicação web simples e eficiente para o gerenciamento de produtos, permitindo o cadastro, visualização e organização das informações básicas dos itens de forma prática. Desenvolvido em PHP, este projeto tem como objetivo facilitar o controle de produtos em pequenos sistemas ou como base para projetos maiores, sendo ideal para desenvolvedores que desejam aprender sobre CRUD (Create, Read, Update, Delete) no ambiente PHP.

---

## 🛠️ Tecnologias Utilizadas

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

---

## ✨ Funcionalidades Principais

- Cadastro de produtos com informações essenciais (nome, descrição, preço, etc.)
- Visualização da lista de produtos cadastrados
- Estrutura básica para futura implementação de edição e exclusão
- Configuração simples e rápida para conexão com banco de dados
- Interface limpa e intuitiva para facilitar o uso

---

## 📁 Estrutura de Pastas

```
Cadastro_de_produto/
│
├── cadastro_produto.php       # Lógica para cadastro de produtos
├── config.php                 # Arquivo de configuração (ex: conexão com banco)
├── index.php                  # Página inicial e lista de produtos
└── README.md                  # Documentação do projeto
```

---

## ⚙️ Como Executar o Projeto

1. **Pré-requisitos:**
   - Servidor web com suporte a PHP (ex: Apache, Nginx)
   - Servidor de banco de dados MySQL ou MariaDB
   - PHP instalado com extensões para MySQL (mysqli ou PDO)

2. **Passos para execução:**

```bash
# Clone o repositório
git clone https://github.com/H-Saimon/Cadastro_de_produto.git

# Entre na pasta do projeto
cd Cadastro_de_produto
```

3. **Configuração do banco de dados:**

- Crie um banco de dados no MySQL para o projeto.
- Edite o arquivo `config.php` para inserir suas credenciais de conexão ao banco:

```php
// Exemplo básico
define('DB_HOST', 'localhost');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
define('DB_NAME', 'nome_do_banco');
```

4. **Importe a estrutura do banco (caso exista script SQL).**

5. **Coloque os arquivos na pasta pública do seu servidor web (Ex: `htdocs` ou `www`).**

6. **Acesse via navegador o arquivo `index.php`:**

```
http://localhost/Cadastro_de_produto/index.php
```

---

## 👨‍💻 Autor

Hítalon Saimon  
[GitHub - H-Saimon](https://github.com/H-Saimon)

---

*Este projeto é aberto para contribuições. Sinta-se à vontade para abrir issues e pull requests!*
```