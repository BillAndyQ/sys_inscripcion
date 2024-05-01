create database sys_inscripcion;
use sys_inscripcion;

create table user(
	id_user INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100) NOT NULL,
    password_hash BINARY NOT NULL
);

create table voucher(
	id_voucher INT AUTO_INCREMENT PRIMARY KEY,
	num_voucher TEXT NOT NULL,
    cod_alumno TEXT NOT NULL,
    estado VARCHAR(1) default('0')
);
select * from voucher WHERE id_voucher=1;
INSERT INTO voucher(num_voucher, cod_alumno, estado) VALUES('P20242008', 'NSUM2025', '0');

create table inscripcion(
	id_inscripcion INT AUTO_INCREMENT primary KEY,
    num_voucher TEXT NOT NULL,
    cod_alumno TEXT NOT NULL,
    codigo_alumno VARCHAR(100) NOT NULL,
    fecha_inscripcion date NOT NULL,
    src_foto TEXT NOT NULL,
    carrera VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(30) NOT NULL,
    apellido_materno VARCHAR(30) NOT NULL,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(200) NOT NULL,
    distrito VARCHAR(100) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    telefono VARCHAR(11) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    dni VARCHAR(9) NOT NULL,
    profesion_ocupacion VARCHAR(60) NOT NULL,
    edad VARCHAR(2) NOT NULL,
    sexo VARCHAR(1) NOT NULL,
    estado_civil VARCHAR(20) NOT NULL,
    nacimiento_distrito VARCHAR(100) NOT NULL,
    nacimiento_provincia VARCHAR(100) NOT NULL,
    nacimiento_departamento VARCHAR(100) NOT NULL,
    institucion_procedencia VARCHAR(150) NOT NULL,
    institucion_procedencia_distrito VARCHAR(100) NOT NULL,
    institucion_procedencia_provincia VARCHAR(100) NOT NULL,
    institucion_procedencia_departamento VARCHAR(100) NOT NULL,
    institucion_procedencia_tipo VARCHAR(15) NOT NULL,
    institucion_procedencia_año_egreso VARCHAR(5) NOT NULL,
    institucion_procedencia_turno VARCHAR(10) NOT NULL,
    preparacion_pre VARCHAR(20) NOT NULL,
    centro_labores VARCHAR(100) NOT NULL,
    centro_labores_turno VARCHAR(100) NOT NULL,
    centro_labores_direccion VARCHAR(100) NOT NULL,
    firma_estudiante VARCHAR(1) NOT NULL,
    firma_apoderado VARCHAR(1) NOT NULL,
    dni_apoderado VARCHAR(9) NOT NULL
);