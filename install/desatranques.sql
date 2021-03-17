CREATE TABLE provincia (
	provincia_id INT(5) PRIMARY KEY AUTO_INCREMENT ,
	nombre VARCHAR(45) NOT NULL
);

CREATE TABLE usuarios (
	usuario_id VARCHAR(45) PRIMARY KEY AUTO_INCREMENT ,
	nombre VARCHAR(45) NOT NULL,
	clave VARCHAR(45) NOT NULL
);

CREATE TABLE tarea (
	id INT(5) PRIMARY KEY AUTO_INCREMENT ,
	persona_contacto VARCHAR(45) NOT NULL,
	telefono_contacto VARCHAR(11) NOT NULL,
	descripcion VARCHAR(200) NOT NULL,
	cp VARCHAR(5) NOT NULL,
	provincia_id INT(5),
	estado VARCHAR(1) NOT NULL,
	fech_creacion DATE NOT NULL,
	operario VARCHAR(45) NOT NULL,
	fech_realizacion DATE NOT NULL,
	anotaciones_ant VARCHAR(120) NOT NULL,
	anotaciones_post VARCHAR(120) NOT NULL,
	CONSTRAINT fk01 FOREIGN KEY (provincia_id) REFERENCES provincia(provincia_id)
);

INSERT INTO provincia VALUES
(NULL, 'Alava'),
(NULL, 'Albacete'),
(NULL, 'Alicante'),
(NULL, 'Almera'),
(NULL, 'Avila'),
(NULL, 'Badajoz'),
(NULL, 'Balears (Illes)'),
(NULL, 'Barcelona'),
(NULL, 'Burgos'),
(NULL, 'Cáceres'),
(NULL, 'Cádiz'),
(NULL, 'Castellón'),
(NULL, 'Ciudad Real'),
(NULL, 'Córdoba'),
(NULL, 'Coruña (A)'),
(NULL, 'Cuenca'),
(NULL, 'Girona'),
(NULL, 'Granada'),
(NULL, 'Guadalajara'),
(NULL, 'Guipzcoa'),
(NULL, 'Huelva'),
(NULL, 'Huesca'),
(NULL, 'Jaén'),
(NULL, 'León'),
(NULL, 'Lleida'),
(NULL, 'Rioja (La)'),
(NULL, 'Lugo'),
(NULL, 'Madrid'),
(NULL, 'Málaga'),
(NULL, 'Murcia'),
(NULL, 'Navarra'),
(NULL, 'Ourense'),
(NULL, 'Asturias'),
(NULL, 'Palencia'),
(NULL, 'Palmas (Las)'),
(NULL, 'Pontevedra'),
(NULL, 'Salamanca'),
(NULL, 'Santa Cruz de Tenerife'),
(NULL, 'Cantabria'),
(NULL, 'Segovia'),
(NULL, 'Sevilla'),
(NULL, 'Soria'),
(NULL, 'Tarragona'),
(NULL, 'Teruel'),
(NULL, 'Toledo'),
(NULL, 'Valencia'),
(NULL, 'Valladolid'),
(NULL, 'Vizcaya'),
(NULL, 'Zamora'),
(NULL, 'Zaragoza'),
(NULL, 'Ceuta'),
(NULL, 'Melilla');

INSERT INTO usuarios VALUES
('paconv@destranque.com',"paco", "3456"),
('antoniofj@destranque.com',"antonio", "7418");

INSERT INTO tarea VALUES
(NULL, 'Alfredo Martinez Perez', '689751452', 'Sale agua debajo del lavavajillas', '08100', '28', 'P', '2018-10-28' ,"paco", '2018-10-30',"se requiere factura" , 'el pago se realizara por trasnferencia');
