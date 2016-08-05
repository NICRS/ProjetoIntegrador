CREATE DATABASE banco_user;
USE banco_user;


create table table_usuarios (
ID int NOT NULL AUTO_INCREMENT,
nome VARCHAR(60),
PRIMARY KEY (ID)
);

SELECT (nome) FROM table_usuarios;
SELECT (id) FROM table_usuarios;
DELETE FROM table_usuarios
WHERE (nome) = Tiago
-- SELECT (foto) FROM table_usuarios;


--DROP DATABASE banco_user;