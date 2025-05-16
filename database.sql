-- Database Querys --
mysql> create database sistema_produtos;
mysql> use sistema_produtos;

mysql> create table produtos (
	-> id int auto_increment primary key,
	-> codigo varchar(50) not null unique,
	-> nome varchar(100) not null,
	-> descricao text,
	-> valor decimal(10,2) not null default 0.00,
	-> quantidade int not null,
	-> ativo boolean not null default true,
	-> data_cadastro timestamp default current_timestamp);

mysql> CREATE TABLE usuarios (
    ->     id INT AUTO_INCREMENT PRIMARY KEY,
    ->     nome VARCHAR(100) NOT NULL,
    ->     email VARCHAR(100) NOT NULL UNIQUE,
    ->     senha VARCHAR(255) NOT NULL,
    ->     data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -> );

mysql> insert into usuarios(nome, email, senha) values ('admin','admin@admin.com', 'admin');

mysql> create table produtos(id int auto_increment primary key,
	-> nome_produto varchar(100) not null, 
	-> valor_produto decimal(10,2) not null, 
	-> data_cadastro timestamp not null default current_timestamp,
	-> data_atualizacao timestamp not null default current_timestamp on update current_timestamp);


