-- SELECT md5('saraivaconam$008');
-- CRIAÇÃO DO USUARIO SARAIVA COM SENHA conam$008
CREATE ROLE saraiva LOGIN
  ENCRYPTED PASSWORD 'md5389c3fbb8291a2746ebb213531409e7b'
  SUPERUSER INHERIT CREATEDB NOCREATEROLE NOREPLICATION;
      
-- Windows
CREATE DATABASE estoque
  WITH OWNER = saraiva
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;

USE estoque;

CREATE TABLE categorias
(
  id SERIAL PRIMARY KEY,
  nome VARCHAR(50) NOT NULL
);

CREATE TABLE produtos
(
  id SERIAL PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  preco NUMERIC(15,2) NOT NULL,
  quantidade INT NOT NULL,
  categoria_id INT NOT NULL
);

ALTER TABLE produtos ADD CONSTRAINT fk_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id);

INSERT INTO categorias (nome) VALUES
('Livros'),
('Jogos'),
('Filmes'),
('Revistas');

INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES
('O Senhor dos Anéis, Trilogia Completa', 119.50, 10, 3),
('Batman Arkahan City', 65.99, 7, 2),
('Jogador Nº 1', 29.90, 5, 1),
('As Cronicas de Gelo e Fogo - 5 Livros', 199.99, 2, 1),
('O Poderoso Chefão', 89.90, 1, 3);