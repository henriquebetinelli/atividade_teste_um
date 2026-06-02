-- criar banco de dados
CREATE DATABASE sistema_simples;

-- selecionar o banco de dados para usar
USE sistema_simples;

-- criar tabela de usuários
CREATE TABLE users (
    -- definir id como chave primária
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- definir username como campo obrigatório
    username VARCHAR(255) NOT NULL,
    -- definir password como campo obrigatório
    password VARCHAR(255) NOT NULL
);

-- colocar um usuário na tabela de usuários
INSERT INTO users (username, password) VALUES ('admin', '123');