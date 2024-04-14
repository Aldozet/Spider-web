CREATE DATABASE HandFood;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50),
    correo_electronico VARCHAR(100),
    contrasena VARCHAR(100), -- Se recomienda almacenar una versión cifrada de la contraseña
);

CREATE TABLE donaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_organizacion VARCHAR(100),
    correo_electronico VARCHAR(100),
    telefono_contacto VARCHAR(20),
    titulo VARCHAR(100),
    descripcion TEXT,
    fecha_hora_solicitud DATETIME,
    imagen VARCHAR(40),
    estado_procedencia VARCHAR(255),
    estado_producto ENUM('0', '1', '2', '3'), --'fresco', 'conservado', 'añejado', 'podrido'
    fecha_caducidad DATE
);

CREATE TABLE solicitudes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_organizacion VARCHAR(100),
    correo_electronico VARCHAR(100),
    telefono_contacto VARCHAR(20),
    cantidad_donacion INT(10),
    fecha_hora_solicitud DATETIME,
    descripcion TEXT
);