-- Active: 1727458372324@@127.0.0.1@3306@proyecto_bd
CREATE DATABASE IF NOT EXISTS Proyecto_BD;

USE Proyecto_BD;

DROP DATABASE IF EXISTS Proyecto_BD;

CREATE TABLE VIDEOJUEGO (
    ID_VIDEOJUEGO INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(100) NOT NULL,
    DESCRIPCION VARCHAR(1000) NOT NULL,
    PRECIO DECIMAL(10, 2) NOT NULL,
    STOCK INT NOT NULL
);

INSERT INTO VIDEOJUEGO (NOMBRE, DESCRIPCION, PRECIO, STOCK) VALUES ('The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild es un videojuego de acción-aventura de 2017 desarrollado y publicado por Nintendo para la consola Nintendo Switch y Wii U.', 59.99, 100);
INSERT INTO VIDEOJUEGO (NOMBRE, DESCRIPCION, PRECIO, STOCK) VALUES ('Super Mario Odyssey', 'Super Mario Odyssey es un videojuego de plataformas de 2017 desarrollado y publicado por Nintendo para la consola Nintendo Switch.', 59.99, 100);


CREATE TABLE CATEGORIA (
    ID_CATEGORIA INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(100) NOT NULL
);