# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Base de Dados: TestePHP
# Tempo de Geração: 2021-10-07 13:01:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` text,
  `cpfcnpj` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco` text,
  `descri_titulo` text,
  `valor` float DEFAULT NULL,
  `data_venc` date DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nome`, `cpfcnpj`, `data_nascimento`, `endereco`, `descri_titulo`, `valor`, `data_venc`, `update_at`)
VALUES
	(25,'Vitoria Almeida Alves','12312323133','1998-04-24','ajc joao pedro j','credicard 209239',132145,'2021-05-06','2021-10-07 12:52:18'),
	(32,'Joao Alves','131.321.32','1998-04-29','pedro alves antonio','Ourocard SA',2312,'2021-12-20','2021-10-07 03:09:59'),
	(33,'Joao Alves','21.313.121/321312','1998-04-29','pedro alves antonio','Ourocard SA',2312,'2021-12-20','2021-10-07 03:10:08'),
	(34,'Joao Alves','12.312.331/1233','1998-04-29','pedro alves antonio','Ourocard SA',2312,'2021-12-20','2021-10-07 03:10:43'),
	(35,'Joao Alves','31231132123123','1998-04-29','pedro alves antonio','Ourocard SA',2312,'2021-12-20','2021-10-07 03:12:45'),
	(36,'Josue Geraldo','03016842866','1959-09-29','rua catarina cintra 126','Carrefour Cartoes SA',28100,'2021-12-20','2021-10-07 12:53:55');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
