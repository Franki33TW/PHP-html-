#DROP DATABASE Concesionario;

CREATE DATABASE Concesionario;
USE Concesionario;

CREATE TABLE Clientes(
	id INT AUTO_INCREMENT,
    ciudad VARCHAR(50) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    nif CHAR(9) UNIQUE NOT NULL,
    num_telefono VARCHAR(30),
    PRIMARY KEY(id)
);

CREATE TABLE Coches(
	id INT AUTO_INCREMENT,
    precio FLOAT NOT NULL,
    color VARCHAR(200) NOT NULL,
    marca_modelo VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL,
    fk_id_clientes INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(fk_id_clientes) REFERENCES Clientes(id)
);

CREATE TABLE Revisiones(
	id INT AUTO_INCREMENT,
    cambio_filtro BIT NOT NULL,
    cambio_aceite BIT NOT NULL,
    cambio_frenos BIT NOT NULL,
    otros_cambios VARCHAR(300),
    PRIMARY KEY(id)
);

CREATE TABLE Pasan(
	id INT AUTO_INCREMENT,
    fk_id_coches INT NOT NULL,
    fk_id_revisiones INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(fk_id_coches) REFERENCES Coches(id),
    FOREIGN KEY(fk_id_revisiones) REFERENCES Revisiones(id)
);