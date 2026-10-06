CREATE TABLE tb_mapeos(
    id_map INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nro_espacio VARCHAR(255) NULL,
    estado_espacio VARCHAR(255) NULL,
    observacion VARCHAR(255) NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    fyh_eliminacion DATETIME NULL,
    estado VARCHAR(10)
);


INSERT INTO `tb_mapeos` (`id_map`, `nro_espacio`, `estado_espacio`, `observacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES (NULL, '10', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1');