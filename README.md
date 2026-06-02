# Sistema Simples PHP

## Objetivo da Aplicação

O Sistema Simples PHP é uma aplicação web desenvolvida para demonstrar conceitos básicos de desenvolvimento back-end com PHP e banco de dados MySQL. O sistema permite realizar autenticação de usuários, cadastro de novos usuários e visualização dos registros armazenados no banco de dados.

O projeto tem como foco o aprendizado de sessões, conexão com banco de dados, manipulação de formulários HTML e execução de comandos SQL utilizando PHP.

---

## Tecnologias Utilizadas

- PHP
- HTML5
- CSS3
- MySQL
- XAMPP/WAMP (ambiente de execução local)
- SQL
- Mysqli (biblioteca de conexão com banco de dados)

---

## Estrutura Básica dos Arquivos

```text
atividade_teste_um/
│
├── index.php
│
├── infra/
│   └── db/
│       ├── connect.php
│       └── script.sql
│
├── public/
│   ├── home.php
│   ├── logout.php
│   │
│   └── components/
│       ├── navbar.php
│       └── table.php
│
└── styles/
    └── style.css
```

### Descrição dos Arquivos

| Arquivo | Função |
|----------|----------|
| index.php | Tela de login e autenticação dos usuários |
| connect.php | Realiza a conexão com o banco de dados |
| script.sql | Criação do banco de dados e da tabela de usuários |
| home.php | Página principal após o login |
| logout.php | Encerra a sessão do usuário |
| navbar.php | Componente reutilizável da barra de navegação |
| table.php | Exibe os usuários cadastrados em formato de tabela |
| style.css | Arquivo responsável pela estilização da aplicação |

---

## Explicação Geral Sobre o Funcionamento do Código

A aplicação inicia na página `index.php`, onde o usuário informa seu nome de usuário e senha.

Ao enviar o formulário:

1. Os dados são capturados via método POST.
2. O sistema realiza uma consulta no banco de dados.
3. Caso as credenciais estejam corretas, uma sessão é criada.
4. O usuário é redirecionado para a página `home.php`.

Na página inicial:

- O nome do usuário autenticado é exibido.
- É possível cadastrar novos usuários.
- Os dados são inseridos na tabela `users`.
- Uma tabela apresenta todos os usuários cadastrados no banco.

O controle de acesso é realizado utilizando sessões PHP. Caso um usuário tente acessar a página principal sem estar autenticado, ele será redirecionado para a tela de login.

A conexão com o banco de dados é centralizada no arquivo `connect.php`, permitindo reutilização em diferentes páginas do sistema.

---

## Principais Aprendizados Obtidos Durante a Análise

Durante a análise do projeto foi possível compreender:

- Como criar uma conexão entre PHP e MySQL utilizando Mysqli.
- Utilização de formulários HTML para envio de dados.
- Processamento de requisições POST em PHP.
- Criação e gerenciamento de sessões para autenticação.
- Execução de comandos SQL de consulta e inserção.
- Organização do projeto utilizando componentes reutilizáveis.
- Separação entre lógica de negócio, interface e banco de dados.
- Exibição dinâmica de informações armazenadas em um banco de dados.
- Estrutura básica de um sistema de login e gerenciamento de usuários.

---

## Considerações Finais

Este projeto representa uma implementação simples de um sistema de autenticação e gerenciamento de usuários, servindo como base para estudos de desenvolvimento web com PHP e MySQL. A aplicação demonstra conceitos fundamentais que podem ser expandidos futuramente com validações, criptografia de senhas, proteção contra SQL Injection e melhorias na interface.