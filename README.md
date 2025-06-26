# Documentação do Projeto Pixelverse

## 1. Introdução

Pixelverse é uma aplicação web desenvolvida com o framework PHP **Laravel 9**. O sistema foi projetado para ser uma plataforma de e-commerce ou um sistema de gerenciamento de loja, com módulos para gerenciar clientes, produtos, fornecedores e contatos.

## 2. Tecnologias Utilizadas

* **Backend:** PHP 8+
* **Framework:** Laravel 9
* **Banco de Dados:** MySQL (ou outro SGBD compatível com Laravel)
* **Frontend:** Blade Templates (padrão do Laravel)
* **Gerenciador de Dependências:** Composer

## 3. Estrutura do Projeto

A estrutura segue o padrão do Laravel, com os principais componentes localizados nos seguintes diretórios:

* `app/Http/Controllers/`: Contém os controladores que gerenciam a lógica das requisições.
    * `ClienteController.php`
    * `ContatoController.php`
    * `FornecedorController.php`
    * `ProdutoController.php`
    * `HomeController.php`
* `app/Models/`: Contém os modelos que interagem com o banco de dados.
    * `Cliente.php`
    * `Contato.php`
    * `Fornecedor.php`
    * `Produto.php`
    * `User.php`
* `resources/views/`: Contém os arquivos de template (telas do sistema).
    * `cliente.blade.php`
    * `contato.blade.php`
    * `fornecedor.blade.php`
    * `produto.blade.php`
    * `home.blade.php`
* `routes/`: Contém os arquivos de definição de rotas.
    * `web.php`: Rotas para a aplicação web.
    * `api.php`: Rotas para a API.
* `database/migrations/`: Contém as migrações para a criação das tabelas do banco de dados.
* `public/`: Diretório público, ponto de entrada da aplicação.

## 4. Funcionalidades

O sistema possui as seguintes funcionalidades principais:

### 4.1. Gerenciamento de Clientes

* **Rota:** `/cliente`
* **Controlador:** `ClienteController`
* **View:** `cliente.blade.php`
* **Descrição:** Permite o cadastro e, presumivelmente, a listagem e gerenciamento de clientes do sistema.

### 4.2. Gerenciamento de Produtos

* **Rota:** `/produto`
* **Controlador:** `ProdutoController`
* **View:** `produto.blade.php`
* **Descrição:** Permite o cadastro e gerenciamento de produtos da loja.

### 4.3. Gerenciamento de Fornecedores

* **Rota:** `/fornecedor`
* **Controlador:** `FornecedorController`
* **View:** `fornecedor.blade.php`
* **Descrição:** Permite o cadastro e gerenciamento de fornecedores de produtos.

### 4.4. Formulário de Contato

* **Rota:** `/contato`
* **Controlador:** `ContatoController`
* **View:** `contato.blade.php`
* **Descrição:** Uma página com um formulário para que os visitantes possam enviar mensagens. Os dados são salvos no banco de dados.

## 5. Banco de Dados

A estrutura do banco de dados está definida no arquivo `codigo_banco.txt` e pode ser replicada usando as *migrations* do Laravel. As principais tabelas são:

* **`tbCliente`**: Armazena as informações dos clientes.
    * `idCliente` (Chave Primária)
    * `nomeCliente`
    * `cpfCliente`
    * `emailCliente`
    * ... (outros campos relevantes)
* **`tbProduto`**: Armazena as informações dos produtos.
    * `idProduto` (Chave Primária)
    * `nomeProduto`
    * `valorProduto`
    * `idCategoria` (Chave Estrangeira para `tbCategoria`)
    * ... (outros campos relevantes)
* **`tbContato`**: Armazena as mensagens enviadas pelo formulário de contato.
    * `idContato` (Chave Primária)
    * `nomeContato`
    * `emailContato`
    * `assuntoContato`
    * `msgContato`
* **`tbCategoria`**: Armazena as categorias dos produtos.
    * `idCategoria` (Chave Primária)
    * `nomeCategoria`

## 6. Rotas (Endpoints)

### 6.1. Rotas Web (`routes/web.php`)

| Verbo | URI | Ação | Nome da Rota |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `HomeController@index` | `home` |
| `GET` | `/contato` | `ContatoController@index` | `contato` |
| `GET` | `/cliente` | `ClienteController@index` | `cliente` |
| `GET` | `/fornecedor` | `FornecedorController@index` | `fornecedor` |
| `GET` | `/produto` | `ProdutoController@index` | `produto` |

### 6.2. Rotas de API (`routes/api.php`)

| Verbo | URI | Ação |
| :--- | :--- | :--- |
| `POST` | `/contato` | `ContatoController@store` |

## 7. Como Executar o Projeto

Para configurar e executar o projeto em um ambiente de desenvolvimento local, siga os passos abaixo:

1.  **Clonar o Repositório**
    ```bash
    git clone [https://github.com/SEU-USUARIO/pixelverse.git](https://github.com/SEU-USUARIO/pixelverse.git)
    cd pixelverse
    ```

2.  **Instalar Dependências**
    ```bash
    composer install
    ```

3.  **Configurar Variáveis de Ambiente**
    * Copie o arquivo `.env.example` para `.env`.
    * Configure as variáveis de conexão com o banco de dados (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Executar as Migrations**
    * Este comando criará as tabelas no banco de dados.
    ```bash
    php artisan migrate
    ```

5.  **Iniciar o Servidor de Desenvolvimento**
    ```bash
    php artisan serve
    ```

6.  Acesse a aplicação em seu navegador no endereço: `http://127.0.0.1:8000`.
