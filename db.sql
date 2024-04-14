CREATE DATABASE HandFood;

USE HandFood;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100), 
    correo_electronico VARCHAR(255), 
    contrasena VARCHAR(100) 
);

CREATE TABLE donaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_organizacion VARCHAR(100),
    correo_electronico VARCHAR(255), 
    telefono_contacto VARCHAR(20),
    titulo VARCHAR(100),
    descripcion TEXT,
    fecha_hora_solicitud DATETIME,
    imagen VARCHAR(40),
    estado_procedencia VARCHAR(255), 
    estado_producto ENUM('fresco', 'conservado', 'añejado', 'podrido'),
    fecha_caducidad DATE
);

CREATE TABLE solicitudes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_organizacion VARCHAR(100),
    correo_electronico VARCHAR(255), 
    telefono_contacto VARCHAR(20),
    cantidad_donacion INT,
    fecha_hora_solicitud DATETIME,
    descripcion TEXT
);
