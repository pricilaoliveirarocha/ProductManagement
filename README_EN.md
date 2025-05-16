# Product Management System

PHP application for product registration, editing, deletion, listing, and authentication with access control and basic functionalities.  
Created as a technical test project for an internship position.

## 🛠 Technologies Used
- PHP 8.x
- MySQL
- Bootstrap 5
- JavaScript (Vanilla)
- MVC Pattern

## 📂 Structure
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


## ⚙️ Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/pricilaoliveirarocha/ProductManagement.git
   ```
    Enter the cloned folder:
   ```bash
     cd ProductManagement
   ```
   Start PHP's built-in server:
   ```bash
    php -S localhost:8000
   ```
   Start your MySQL server and log in:
   ```bash
     mysql -u root -p
   ```
   I created the database using MySQL directly from the Linux terminal; for Windows, the commands may differ.
   ```bash
     CREATE DATABASE sistema_produtos;
   ```
    Import the SQL structure
    For example:
    ```bash
      mysql -u root -p sistema_produtos < caminho/para/database.sql
    ```
  
    ## 🧪 Quick Test  
    Access */login* and use a user already registered in the database.  
    Access */produto/listar* to view the product table.  

