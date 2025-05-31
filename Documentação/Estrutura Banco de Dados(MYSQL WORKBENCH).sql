CREATE DATABASE kilix;
USE kilix;


CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(140) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel_id ENUM('1','2','3') NOT NULL DEFAULT 1
);

CREATE TABLE funcionarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(50),
    telefone VARCHAR(20),
    email VARCHAR(100) UNIQUE,
    salario DECIMAL(10,2),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    usuarios_id INT NOT NULL,
    FOREIGN KEY (usuarios_id) REFERENCES usuarios(id)
);


CREATE TABLE estoque (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
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
    FOREIGN KEY (produto_id) REFERENCES estoque(id),
    FOREIGN KEY (responsavel_id) REFERENCES funcionarios(id)
);