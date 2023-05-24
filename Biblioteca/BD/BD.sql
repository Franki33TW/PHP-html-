#DROP DATABASE biblioteca;

CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE libros(
	id INT AUTO_INCREMENT, 
    titulo VARCHAR(100) NOT NULL, 
    tema VARCHAR(50) NOT NULL, 
	n_pag INT, 
    prestado BIT NOT NULL, 
    fecha_ult_res DATE, 
    PRIMARY KEY(id)
);

CREATE TABLE autores(
	id INT AUTO_INCREMENT, 
    nombre VARCHAR(100) NOT NULL, 
    apellidos VARCHAR(100) NOT NULL, 
	dni CHAR(9) UNIQUE, 
    tema1 VARCHAR(50) NOT NULL, 
    tema2 VARCHAR(50), 
    PRIMARY KEY(id)
);

CREATE TABLE libros_autores(
	id INT AUTO_INCREMENT, 
    fk_id_libro INT NOT NULL,  
    fk_id_autor INT NOT NULL,  
    PRIMARY KEY(id), 
    FOREIGN KEY(fk_id_libro) REFERENCES libros(id) ON DELETE CASCADE,
    FOREIGN KEY(fk_id_autor) REFERENCES autores(id) ON DELETE RESTRICT
);