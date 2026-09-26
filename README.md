# 👥 Projeto Cadastro de Amigos — Gabi

## 📌 Sobre o Projeto

Este projeto foi desenvolvido como atividade prática do curso de **Desenvolvimento de Sistemas**, utilizando **PHP, MySQL e HTML**.

O sistema permite realizar o acesso por meio de uma tela de login e, após a autenticação, disponibiliza funcionalidades para o **cadastro e gerenciamento de amigos**.

A proposta do projeto é aplicar na prática conceitos de desenvolvimento web, integração com banco de dados e operações de cadastro, consulta, atualização e exclusão de registros.

---

## 🎯 Objetivo

Desenvolver um sistema web para gerenciamento de amigos, aplicando na prática conceitos de:

* Desenvolvimento Web;
* PHP;
* HTML;
* Banco de Dados;
* SQL;
* Formulários;
* Conexão com banco de dados;
* Operações CRUD;
* Autenticação de usuários;
* Navegação entre páginas.
---

## 🖥️ Funcionalidades

### 🔐 Login

O sistema possui uma tela de login para controlar o acesso às funcionalidades do projeto.

### 👤 Cadastro de Usuários

Permite cadastrar novos usuários que poderão acessar o sistema.

### 👥 Cadastro de Amigos

O cadastro permite informar:

| Campo   | Descrição              |
| ------- | ---------------------- |
| Código  | Identificação do amigo |
| Nome    | Nome do amigo          |
| Apelido | Apelido do amigo       |
| Email   | Endereço de e-mail     |

### 📋 Listagem

A página de listagem apresenta os amigos cadastrados no banco de dados.

### ✏️ Atualização

Permite alterar os dados de um amigo já cadastrado.

### 🗑️ Exclusão

Permite excluir um amigo do banco de dados.

### 🚪 Logout

O sistema possui uma opção para encerrar a sessão do usuário.

---

## 🗄️ Banco de Dados

## 🚀 Como utilizar o aplicativo

1. 🖥️ Inicie o **XAMPP** e ative os serviços **Apache** e **MySQL**.
2. 🗄️ Acesse o **phpMyAdmin** em `http://localhost/phpmyadmin/`.
3. 🛠️ Crie o banco de dados **`pwii`** utilizado pelo aplicativo.
4. 📋 Crie a tabela **`usuario`** dentro do banco de dados.
5. 🧩 Configure as colunas da tabela **`usuario`** conforme o projeto.
6. 🔗 Configure o PHP para realizar a **conexão com o banco `pwii`**.
7. 🔐 Acesse o aplicativo e realize o **login** do usuário.
8. 📝 Utilize o sistema para **cadastrar e consultar os usuários**.
9. 💾 As informações são armazenadas na tabela **`usuario`** do banco `pwii`.
10. 🚪 Utilize o **Logout** para encerrar a sessão com segurança.


### 📋 Colunas da tabela

```text
id
nome
senha
```
<img width="1148" height="834" alt="03" src="https://github.com/user-attachments/assets/33a34b41-07f5-454c-87e4-7e8ccb517c49" />

---

## 🛠️ Tecnologias Utilizadas

* 🐘 **PHP**
* 🌐 **HTML5**
* 🎨 **W3.CSS**
* 🔤 **Font Awesome**
* 🗄️ **MySQL / MariaDB**
* 🖥️ **Apache**
* 📦 **XAMPP**
* 📝 **Visual Studio Code**
* 🔧 **Git e GitHub**

---

## 📁 Estrutura do Projeto

Exemplo dos principais arquivos utilizados:

A estrutura atual da pasta do projeto é:

```text
Projeto-Cadastro-Amigos/
│
├── amigos.jpg
├── atualizar.php
├── atualizarAction.php
├── cadastro.php
├── cadastroAction.php
├── cadastroUsuario.php
├── cadastroUsuarioAction.php
├── conexao.php
├── excluir.php
├── excluirAction.php
├── gabi.jpg
├── index.php
├── listar.php
├── loginAction.php
├── logout.php
├── principal.php

A estrutura pode ser alterada conforme a organização final dos arquivos do projeto.

---

# 📄 Descrição dos Arquivos

| Arquivo                     | Função                                        |
| --------------------------- | --------------------------------------------- |
| `index.php`                 | Página inicial/tela de login do sistema       |
| `loginAction.php`           | Processa os dados informados no login         |
| `principal.php`             | Página principal após o acesso ao sistema     |
| `cadastroUsuario.php`       | Formulário para cadastro de novos usuários    |
| `cadastroUsuarioAction.php` | Processa o cadastro de novos usuários         |
| `cadastro.php`              | Formulário para cadastrar novos amigos        |
| `cadastroAction.php`        | Processa o cadastro dos amigos                |
| `listar.php`                | Exibe a lista de amigos cadastrados           |
| `atualizar.php`             | Formulário para alterar os dados de um amigo  |
| `atualizarAction.php`       | Processa a atualização dos dados              |
| `excluir.php`               | Página relacionada à exclusão de um amigo     |
| `excluirAction.php`         | Processa a exclusão do registro               |
| `conexao.php`               | Responsável pela conexão com o banco de dados |
| `logout.php`                | Encerra a sessão do usuário                   |
| `gabi.jpg`                  | Imagem utilizada no sistema                   |
| `amigos.jpg`                | Imagem utilizada no sistema                   |

---

# 🔄 Funcionamento do Sistema

O fluxo principal do projeto pode ser representado da seguinte forma:

```text
                ┌───────────────┐
                │    index.php  │
                │     LOGIN     │
                └───────┬───────┘
                        │
                        ▼
                ┌───────────────┐
                │ loginAction   │
                └───────┬───────┘
                        │
                        ▼
                ┌───────────────┐
                │ principal.php │
                └───────┬───────┘
                        │
          ┌─────────────┼─────────────┐
          │             │             │
          ▼             ▼             ▼
    ┌──────────┐  ┌──────────┐  ┌──────────┐
    │ Cadastro │  │ Listagem │  │  Logout  │
    │ Usuário  │  │ Amigos   │  │          │
    └──────────┘  └────┬─────┘  └──────────┘
                       │
              ┌────────┼────────┐
              │        │        │
              ▼        ▼        ▼
          Cadastrar Atualizar Excluir
```

---

## 📸 Telas do Projeto

### 🔐 Tela de Login

> <img width="686" height="601" alt="tela01" src="https://github.com/user-attachments/assets/0c407f5b-7bcd-4868-abbd-2790a70dc95b" />

### 🏠 Tela Principal

> <img width="976" height="802" alt="tela02" src="https://github.com/user-attachments/assets/b1644eb1-b293-4985-a71d-cc562fc723e9" />

### 👤 Cadastro de Usuário

> <img width="686" height="613" alt="tela03" src="https://github.com/user-attachments/assets/a9626d0d-07bd-4610-9859-6f92aa8c4117" />

### 👥 Cadastro de Amigos

> <img width="629" height="536" alt="tela04" src="https://github.com/user-attachments/assets/d817366b-0ef4-4396-95a6-42642e2d9deb" />

### 📋 Listagem de Amigos

> <img width="1025" height="351" alt="tela05" src="https://github.com/user-attachments/assets/f4b7e5a7-09e3-4c54-b6b2-9bd6c9b6fa23" />

---

## 🧠 Conceitos Aplicados

Durante o desenvolvimento foram aplicados conceitos de:

* Desenvolvimento de páginas web;
* Estrutura HTML;
* Formulários;
* Programação PHP;
* Conexão PHP com banco de dados;
* MySQL/MariaDB/MySQLworkbenck;
* Comandos SQL;
* Operações CRUD;
* Manipulação de dados através de formulários;
* Navegação entre páginas;
* Utilização de bibliotecas CSS e ícones;
* Organização de projeto para versionamento com GitHub.

---

## 🤖 Uso de Inteligência Artificial

A Inteligência Artificial foi utilizada como **ferramenta de apoio durante o desenvolvimento**, principalmente para esclarecer dúvidas relacionadas à estrutura do código, sintaxe PHP, HTML, SQL e organização das funcionalidades.

A implementação, testes, ajustes e execução do projeto foram realizados durante o desenvolvimento da atividade, utilizando o ambiente **XAMPP**, com **Apache, PHP e MySQL
**.

---

## 👨‍💻 Autor

**Marcos Paulo Correa**

Projeto desenvolvido para fins **acadêmicos**, como parte das atividades do curso de **Desenvolvimento de Sistemas**.

---

## 📚 Projeto Acadêmico

**Curso:** Técnico em Desenvolvimento de Sistemas
**Instituição:** Centro Paula Souza — ETEC
**Disciplina:** Desenvolvimento Web / PHP e Banco de Dados

---
