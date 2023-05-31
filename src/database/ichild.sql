CREATE TABLE Responsaveis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cep VARCHAR(20) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    rua VARCHAR(255) NOT NULL,
    numero VARCHAR(255) NOT NULL,
    imagem BLOB
);

CREATE TABLE Transportadores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cnh VARCHAR(255) NOT NULL UNIQUE,
    cep VARCHAR(20) NOT NULL,
    placa VARCHAR(255) NOT NULL,
    marca VARCHAR(255) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL
    imagem BLOB
);


CREATE TABLE Dependentes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    dataNascimento DATE NOT NULL,
    documento VARCHAR(255) NOT NULL UNIQUE,
    turno VARCHAR(255) NOT NULL,
    foto BLOB,
    responsavelId INT NOT NULL,
    transportadorId INT,

    FOREIGN KEY(responsavelId) REFERENCES Responsaveis(id) ON DELETE CASCADE,
    FOREIGN KEY(transportadorId) REFERENCES Transportadores(id)
);

CREATE TABLE Agendas (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(90) NOT NULL,
    description TEXT NOT NULL,
    color VARCHAR(10) NOT NULL,
    start TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    end TIMESTAMP NULL DEFAULT NULL,
    responsavelId INT(11) NOT NULL,
    dependentId INT(11) NOT NULL,
    transportadorId INT,

    FOREIGN KEY(responsavelId) REFERENCES Responsaveis(id),
    FOREIGN KEY(dependentId) REFERENCES Dependentes(id) ON DELETE CASCADE,
    FOREIGN KEY(transportadorId) REFERENCES Transportadores(id)
);

CREATE TABLE Log_do_dia (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    horario TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    statusLog VARCHAR(50) NOT NULL,
    localLog VARCHAR(50) NOT NULL,
    dependentId INT NOT NULL,
    transportadorId INT NOT NULL,

    FOREIGN KEY(transportadorId) REFERENCES Transportadores(id),
    FOREIGN KEY(dependentId) REFERENCES Dependentes(id) ON DELETE CASCADE,
);


