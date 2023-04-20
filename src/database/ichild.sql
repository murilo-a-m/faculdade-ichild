CREATE TABLE Responsaveis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    cep VARCHAR(20) NOT NULL
);

CREATE TABLE Dependentes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    dataNascimento DATE NOT NULL,
    documento VARCHAR(255) NOT NULL,
    turno VARCHAR(255) NOT NULL,
    foto BLOB,

    responsavelId INT NOT NULL,
    transportadorId INT,

    FOREIGN KEY(responsavelId) REFERENCES Responsaveis(id),
    FOREIGN KEY(transportadorId) REFERENCES Transportadores(id)
);

CREATE TABLE Transportadores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cnh VARCHAR(255) NOT NULL,
    cep VARCHAR(20) NOT NULL,
    placa VARCHAR(255) NOT NULL,
    marca VARCHAR(255) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL
);


