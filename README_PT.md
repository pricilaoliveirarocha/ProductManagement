# Sistema de Gerenciamento de Produtos
  <p>Aplicação em PHP para cadastro, edição, exclusão, listagem e autenticação de produtos com controle de acesso e funcionalidades básicas.<br>
    Feito em processo de teste técnico para vaga de estágio.

## 🛠 Tecnologias Utilizadas
- PHP 8.3.11
- MySQL 8.0.42
- Bootstrap 5
- JavaScript (Vanilla)
- Padrão MVC
## 📂 Estrutura
App/<br>
├── Assets/<br>
├── Controller/<br>
├── DAO/<br>
├── Model/<br>
├── View/<br>
│ ├── Includes/<br>
│ ├── Inicio/<br>
│ ├── Login/<br>
│ └── Produto/<br>
autoload.php<br>
config.php<br>
database.sql<br>
index.php<br>
routes.php<br>
404.php<br>
## ⚙️ Instalação

1. Clone o repositório e verifique se o PHP e o Mysql estão instalados e compatíveis:
   ```bash
     git clone https://github.com/PricilaOliveiraRocha/ProductManagement.git
     php -v && mysql -V
   ```
   Entre na pasta clonada:
   ```bash
     cd ProductManagement
   ```
   Inicie o servidor interno do PHP:
   ```bash
    php -S localhost:8000
   ```
   Inicie o seu banco mysql e faça login:
   ```bash
     mysql -u root -p
   ```
   Criei o banco com mysql diretamente no terminal do Linux, para windows talvez sejam comandos diferentes:
   ```bash
     CREATE DATABASE sistema_produtos;
   ```
    Importe a estrutura sql
    Por exemplo:
    ```bash
      mysql -u root -p sistema_produtos < caminho/para/database.sql
    ```
  
    ## 🧪 Teste Rápido
    Acesse */login* e use um usuário já cadastrado no banco.<br>
    Acesse */produto/listar* para visualizar a tabela.

