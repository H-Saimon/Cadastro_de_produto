# Cadastro de Produto

## Descrição

Projeto simples para cadastro e gerenciamento de produtos, desenvolvido em PHP. Permite a inserção de novos produtos e possivelmente sua listagem e manutenção básica. Ideal para aplicações pequenas e aprendizado.

## Funcionalidades Principais

- Tela principal para cadastro de produtos.
- Inserção de dados básicos de um produto por meio de formulário.
- Configuração centralizada para conexão a banco de dados.
- Interface simples e direta para interação do usuário.

## Tecnologias Utilizadas

- PHP (backend)
- MySQL (presumido para gerenciamento do banco de dados, dada a presença do arquivo de configuração)
- HTML (estrutura das páginas)

## Como Instalar e Rodar

1. Clone o repositório localmente:
   ```bash
   git clone <URL-do-repositório>
   ```
2. Configure o banco de dados:
   - Crie uma base de dados MySQL.
   - Configure o arquivo `config.php` com os dados corretos do seu banco (host, usuário, senha e nome do banco).
3. Importe a estrutura da tabela de produtos (baseado nas queries que utilizará no projeto).
4. Coloque os arquivos em seu servidor web local (ex: XAMPP, WAMP) no diretório público.
5. Acesse `index.php` pelo navegador para utilizar o sistema.

## Estrutura do Projeto

```
Cadastro_de_produto/
├── cadastro_produto.php     # Script principal para processamento do cadastro de produtos
├── config.php               # Configurações do banco de dados e conexão
└── index.php                # Página inicial / formulário para cadastro de produtos
```

---

Desenvolvido para facilitar o gerenciamento básico de produtos com foco em simplicidade e aprendizado.