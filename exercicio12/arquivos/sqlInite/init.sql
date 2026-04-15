USE senhas;

CREATE table loguins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

INSERT INTO loguins (nome, senha) VALUES ('admin', 'superloguinsecreto');