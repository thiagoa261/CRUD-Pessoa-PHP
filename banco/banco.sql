CREATE DATABASE teste

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `url_foto` varchar(255),
  PRIMARY KEY (`id_pessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `idade`, `sexo`, `endereco`) VALUES
(1, 'Michel', 30, 'M', 'Rua Brasil, 300'),
(2, 'Ana', 25, 'F', 'Avenida Paulista, 100'),
(3, 'Rafael', 22, 'M', 'Rua Augusta, 150'),
(4, 'Carolina', 28, 'F', 'Rua da Paz, 50'),
(5, 'Pedro', 35, 'M', 'Avenida Copacabana, 200'),
(6, 'Julia', 29, 'F', 'Rua dos Andradas, 75'),
(7, 'Lucas', 26, 'M', 'Avenida Faria Lima, 500'),
(8, 'Mariana', 31, 'F', 'Rua Oscar Freire, 80'),
(9, 'Gustavo', 27, 'M', 'Avenida Atlântica, 30'),
(10, 'Camila', 24, 'F', 'Rua XV de Novembro, 120'),
(11, 'Felipe', 33, 'M', 'Avenida Brasil, 90');