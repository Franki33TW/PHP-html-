CREATE DATABASE Instituto;
USE Instituto;

CREATE TABLE Profesores(
	id INT AUTO_INCREMENT,
    dni CHAR(9) UNIQUE NOT NULL, 
    nombre VARCHAR(300) NOT NULL, 
    direccion VARCHAR(300) NOT NULL, 
    telefono VARCHAR(15),
    PRIMARY KEY(id)
);


CREATE TABLE Modulos(
	id INT AUTO_INCREMENT,
    codigo VARCHAR(20) UNIQUE NOT NULL, 
    nombre VARCHAR(100) NOT NULL, 
    fk_id_profesor INT,
    PRIMARY KEY(id), 
    FOREIGN KEY(fk_id_profesor) REFERENCES Profesores(id)
);


CREATE TABLE Alumnos(
	id INT AUTO_INCREMENT,
    n_exp VARCHAR(20) UNIQUE NOT NULL, 
    nombre VARCHAR(100) NOT NULL, 
    apellidos VARCHAR(100) NOT NULL, 
	fecha_nac DATE, 
    curso VARCHAR(50) NOT NULL, 
    delegado BOOLEAN, 
    PRIMARY KEY(id)
);

CREATE TABLE Modulos_Alumnos(
	id INT AUTO_INCREMENT,
    fk_id_modulo INT,
    fk_id_alumno INT,
    PRIMARY KEY(id), 
    FOREIGN KEY(fk_id_modulo) REFERENCES Modulos(id),
    FOREIGN KEY(fk_id_alumno) REFERENCES Alumnos(id)
);