create database teste

REATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `idade`, `sexo`, `endereco`) VALUES
(1, 'Michel', 30, 'M', 'Rua Brasil, 300'),
(2, 'Maria', 30, 'F', 'Rua Brasil, 300'),
(3, 'Maria', 30, 'F', 'Rua Brasil, 300'),
(4, 'Maria', 30, 'F', 'Rua Brasil, 300'),
(5, 'Maria', 30, 'F', 'Rua Brasil, 300');