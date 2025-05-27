CREATE DATABASE kilix;
USE kilix;


CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(140) UNIQUE NOT NULL,
    senha varCHAR(16) NOT NULL,
    nivel_id INT NOT NULL
);

CREATE TABLE funcionarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(50),
    telefone VARCHAR(20),
    email VARCHAR(100) UNIQUE,
    salario DECIMAL(10,2),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    peso DECIMAL(10,3),
    dimensoes VARCHAR(50)
);


CREATE TABLE queimas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    motivo TEXT NOT NULL,
    data_queima TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    responsavel_id INT NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produtos(id),
    FOREIGN KEY (responsavel_id) REFERENCES funcionarios(id)
);