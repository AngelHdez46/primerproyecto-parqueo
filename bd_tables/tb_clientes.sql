CREATE TABLE tb_clientes(
    id_cliente INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente VARCHAR(255) NULL,
    nit_ci VARCHAR(255) NULL,
    placa_auto VARCHAR(255) NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    fyh_eliminacion DATETIME NULL,
    estado VARCHAR(10)
);


INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `nit_ci`, `placa_auto`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES (NULL, 'Juan Perez', 'XAXX01010100', '1233TYU', '2026-10-01 22:28:49', NULL, NULL, '1');