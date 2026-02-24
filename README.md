# Cadastro_de_produto

[![Versão](https://img.shields.io/badge/version-1.0.0-blue.svg)]()
[![Issues](https://img.shields.io/github/issues/SeuUsuario/Cadastro_de_produto)]()
[![Licença](https://img.shields.io/badge/license-MIT-green)]()
[![Linguagem](https://img.shields.io/badge/language-PHP-blue)]()
[![Status](https://img.shields.io/badge/status-Em%20Desenvolvimento-yellow)]()

---

## Descrição do Projeto

O **Cadastro de Produto** é uma aplicação web desenvolvida em PHP para gerenciamento prático e eficiente de produtos. Seu propósito é oferecer uma solução simples para cadastro, visualização e organização de informações básicas de produtos, facilitando o controle em pequenos sistemas comerciais ou como base para projetos maiores. 

Destinado a desenvolvedores iniciantes e intermediários que buscam aprender os conceitos de CRUD (Create, Read, Update e Delete) na linguagem PHP, o projeto oferece uma arquitetura direta e de fácil compreensão. O sistema emprega uma estrutura enxuta, ideal para fins educativos e aplicações básicas sem a complexidade de frameworks.

---

## Funcionalidades

- **Cadastro de Produtos**: Inclusão de novos produtos através de formulário web.
- **Visualização de Produtos**: Listagem dos produtos cadastrados com informações essenciais.
- **Atualização de Produtos**: Edição das informações cadastrais dos produtos.
- **Exclusão de Produtos**: Remoção de produtos do banco de dados.
- **Configuração Centralizada**: Arquivo dedicado para configuração de conexão com banco (MySQL).

---

## Tecnologias Utilizadas

- **Linguagem de Programação:** PHP
- **Banco de Dados:** MySQL
- **Front-end:** HTML5, CSS3 (embutidos nas páginas PHP)
- **Servidor:** Apache / Nginx (recomendado para execução)
  
Badges:

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)  
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)  
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)  
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

---

## Estrutura de Diretórios

```
Cadastro_de_produto/
├── Cadastro_de_produto/
│   ├── cadastro_produto.php      # Página responsável pelo cadastro e edição de produtos
│   ├── config.php                # Configurações do banco de dados e conexões
│   └── index.php                 # Página principal que exibe a listagem dos produtos
└── README.md                    # Documento atual com instruções e detalhamento
```

- **cadastro_produto.php:** Interface que permite inserir e editar dados do produto. Contém formulários que submetem dados ao banco.
- **config.php:** Centraliza a configuração da conexão MySQL, facilitando manutenção e reutilização.
- **index.php:** Página inicial que exibe a lista dos produtos cadastrados, possibilitando navegação para editar ou excluir cada item.

---

## Instalação e Execução

### Pré-requisitos

- Servidor web com suporte a PHP (versão 7.0 ou superior)
- Servidor de banco de dados MySQL/MariaDB
- Navegador web moderno

### Passos para instalação

1. Clone este repositório em seu ambiente local ou servidor:
   ```bash
   git clone https://github.com/SeuUsuario/Cadastro_de_produto.git
   ```
2. Configure o banco de dados MySQL:
   - Crie um banco de dados, por exemplo `cadastro_produto_db`.
   - Execute o script SQL (criado manualmente ou conforme documentação) para criar a tabela de produtos:
     ```sql
     CREATE TABLE produtos (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(255) NOT NULL,
       descricao TEXT,
       preco DECIMAL(10,2) NOT NULL,
       quantidade INT NOT NULL,
       data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
3. Ajuste as credenciais de conexão no arquivo `Cadastro_de_produto/config.php`:
   ```php
   <?php
   $host = 'localhost';
   $usuario = 'seu_usuario';
   $senha = 'sua_senha';
   $banco = 'cadastro_produto_db';

   $conexao = new mysqli($host, $usuario, $senha, $banco);

   if ($conexao->connect_error) {
       die("Conexão falhou: " . $conexao->connect_error);
   }
   ?>
   ```
4. Copie a pasta `Cadastro_de_produto` para o diretório raiz do seu servidor web (ex: `/var/www/html`).
5. Acesse via navegador o endereço do servidor, por exemplo:
   ```
   http://localhost/Cadastro_de_produto/index.php
   ```

---

## Endpoints

Este projeto não fornece API REST explícita, a interação é realizada via formulários PHP para páginas web.

---

## Testes

Atualmente, o projeto não inclui testes automatizados. Recomenda-se realizar testes manuais acessando as funcionalidades para garantir:

- Inserção válida de produtos
- Alteração correta dos dados
- Exclusão efetiva
- Validação básica no formulário

---

## Deploy

Para publicar o sistema em produção, recomenda-se:

- Ambiente Linux com servidor Apache ou Nginx configurado para PHP.
- Banco MySQL/MariaDB instalado e configurado.
- Configurar permissões adequadas para as pastas do sistema.
- Opcional: uso de container Docker com imagem PHP + MySQL para facilitar deploy.

Exemplo simples de Docker Compose:

```yaml
version: '3.8'
services:
  web:
    image: php:7.4-apache
    volumes:
      - ./Cadastro_de_produto:/var/www/html/Cadastro_de_produto
    ports:
      - "80:80"
  db:
    image: mysql:5.7
    environment:
      MYSQL_ROOT_PASSWORD: sua_senha_root
      MYSQL_DATABASE: cadastro_produto_db
    volumes:
      - db_data:/var/lib/mysql
volumes:
  db_data:
```

---

## Segurança

- Não há sistema de autenticação implementado; recomenda-se proteger o acesso às páginas via autenticação HTTP ou firewall, em ambientes produtivos.
- Validações básicas de formulário são feitas no cliente e servidor, porém ainda devem ser reforçadas para evitar injeção SQL ou XSS.
- A conexão com banco usa mysqli com escapatória implícita; para maior segurança, usar statements preparados (mysqli_stmt).
- Recomenda-se configurar HTTPS no servidor para proteger o tráfego de dados sensíveis.

---

## Melhorias Futuras

- Implementar sistema de autenticação e controle de acesso para usuários.
- Adicionar validação e sanitização mais robusta dos dados do formulário.
- Migrar a camada de acesso ao banco para PDO com prepared statements.
- Criação de testes unitários e de integração automatizados.
- Implementar paginação e busca na listagem dos produtos.
- Adotar arquitetura MVC para melhor organização e manutenção.
- Utilizar frameworks PHP modernos para escalabilidade (ex: Laravel).
- Adicionar upload de imagens para produtos.

---

## Contribuição

Contribuições são bem-vindas! Para contribuir:

1. Faça um fork deste repositório.
2. Crie uma branch com a sua feature: `git checkout -b minha-feature`.
3. Faça commit das alterações: `git commit -m 'Descrição da sua alteração'`.
4. Faça push para a branch: `git push origin minha-feature`.
5. Abra um Pull Request descrevendo suas modificações.

Por favor, siga as boas práticas de codificação e mantenha o padrão atual do projeto.

---

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---