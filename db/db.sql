CREATE TABLE usuarios(
    id_usuarios     INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,    
    nombres         VARCHAR(255) NOT NULL,
    cargo           VARCHAR(255) NOT NULL,
    email           VARCHAR(255) NOT NULL UNIQUE KEY,
    password        TEXT NOT NULL,

    fyh_creacion    DATETIME NULL,
    fyh_actualizacion   DATETIME NULL,
    estado              VARCHAR(11)
) ENGINE=InnoDB;

INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion, estado)
VALUES ('Juanito ur','Administrador', 'correo@correo.com', '12345','2024-01-28','1');

CREATE TABLE roles(
    id_rol     INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,    
    nombre_rol         VARCHAR(255) NOT NULL UNIQUE KEY,

    fyh_creacion    DATETIME NULL,
    fyh_actualizacion   DATETIME NULL,
    estado              VARCHAR(11)
) ENGINE=InnoDB;

INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('ADMINISTRADOR','2024-01-28 05:07:50','1');
INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('LIDER DE RED','2024-01-28 05:07:50','1');
INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('DIRECTOR ACADEMICO','2024-01-28 05:07:50','1');
INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('DIRECTOR ADMINISTRATIVO','2024-01-28 05:07:50','1');
INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('CONTADOR','2024-01-28 05:07:50','1');
INSERT INTO roles (nombre_rol,fyh_creacion, estado) VALUES ('SECRETARIA','2024-01-28 05:07:50','1');