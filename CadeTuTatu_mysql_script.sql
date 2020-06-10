CREATE TABLE `usuarios` (
	`id_usuario` int NOT NULL AUTO_INCREMENT,
	`nome_usuario` varchar(255) NOT NULL,
	`email_usuario` varchar(255) NOT NULL,
	`senha_usuario` varchar(255) NOT NULL,
	`tipo_usuario` char(1) NOT NULL,
	`depto_usuario` varchar(50) NOT NULL,
	PRIMARY KEY (`id_usuario`)
);

CREATE TABLE `invertebrados` (
	`id_invertebrado` int NOT NULL AUTO_INCREMENT,
	`nome_vulgar` varchar(255) NOT NULL,
	`nome_cientifico` varchar(255) NOT NULL,
	`ordem` varchar(255) NOT NULL,
	`familia` varchar(255) NOT NULL,
	`autor` varchar(255) NOT NULL,
	`habitat` varchar(255) NOT NULL,
	`alimentacao` varchar(255) NOT NULL,
	`habitos` varchar(255) NOT NULL,
	`distribuicao_geografica` TEXT(500) NOT NULL,
	`outras_informacoes` TEXT(500) NOT NULL,
	PRIMARY KEY (`id_invertebrado`)
);

CREATE TABLE `invertebrados_imagens` (
	`fot_inv_id` int NOT NULL AUTO_INCREMENT,
	`id_invertebrado` int NOT NULL,
	`fot_inv_caminho` varchar(255) NOT NULL,
	PRIMARY KEY (`fot_inv_id`)
);

CREATE TABLE `invertebrados_referencias` (
	`ref_inv_id` int NOT NULL AUTO_INCREMENT,
	`ref_descricao` TEXT(500) NOT NULL,
	`id_invertebrado` int NOT NULL,
	PRIMARY KEY (`ref_inv_id`)
);

CREATE TABLE `vertebrados` (
	`id_vertebrado` int NOT NULL AUTO_INCREMENT,
	`nome_vulgar` varchar(255) NOT NULL,
	`nome_cientifico` varchar(255) NOT NULL,
	`ordem` varchar(255) NOT NULL,
	`familia` varchar(255) NOT NULL,
	`autor` varchar(255) NOT NULL,
	`habitat` varchar(255) NOT NULL,
	`alimentacao` varchar(255) NOT NULL,
	`habitos` varchar(255) NOT NULL,
	`outras_informacoes` TEXT(500) NOT NULL,
	`distribuicao_geografica` TEXT(500) NOT NULL,
	PRIMARY KEY (`id_vertebrado`)
);

CREATE TABLE `invertebrados_imagens copy` (
	`id_invertebrado` int NOT NULL,
	`fot_inv_caminho` varchar(255) NOT NULL,
	`fot_ver_id` int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`fot_ver_id`)
);

CREATE TABLE `invertebrados_referencias copy` (
	`ref_inv_id` int NOT NULL AUTO_INCREMENT,
	`ref_descricao` TEXT(500) NOT NULL,
	`id_invertebrado` int NOT NULL,
	PRIMARY KEY (`ref_inv_id`)
);

ALTER TABLE `invertebrados_imagens` ADD CONSTRAINT `invertebrados_imagens_fk0` FOREIGN KEY (`id_invertebrado`) REFERENCES `invertebrados`(`id_invertebrado`);

ALTER TABLE `invertebrados_referencias` ADD CONSTRAINT `invertebrados_referencias_fk0` FOREIGN KEY (`id_invertebrado`) REFERENCES `invertebrados`(`id_invertebrado`);

ALTER TABLE `invertebrados_imagens copy` ADD CONSTRAINT `invertebrados_imagens copy_fk0` FOREIGN KEY (`id_invertebrado`) REFERENCES `vertebrados`(`id_vertebrado`);

ALTER TABLE `invertebrados_referencias copy` ADD CONSTRAINT `invertebrados_referencias copy_fk0` FOREIGN KEY (`id_invertebrado`) REFERENCES `vertebrados`(`id_vertebrado`);

