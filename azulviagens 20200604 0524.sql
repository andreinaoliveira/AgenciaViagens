-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema azulviagens
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ azulviagens;
USE azulviagens;

--
-- Table structure for table `azulviagens`.`aeroporto`
--

DROP TABLE IF EXISTS `aeroporto`;
CREATE TABLE `aeroporto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(50) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(50) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(50) COLLATE utf8_bin NOT NULL,
  `pais` varchar(50) COLLATE utf8_bin NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin NOT NULL,
  `codigo_aita` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `azulviagens`.`aeroporto`
--

/*!40000 ALTER TABLE `aeroporto` DISABLE KEYS */;
INSERT INTO `aeroporto` (`id`,`rua`,`bairro`,`estado`,`cidade`,`pais`,`cep`,`codigo_aita`) VALUES 
 (1,'Av. Santos Dumont','Tarumã','AM','Manaus','Brasil','69041-000','MAO'),
 (2,'Rod. Hélio Smidt','s/nº','SP','Guarulhos','Brasil','07190-100','GRU'),
 (3,'Estr. São João','Do Eden','AM','Parintins','Brasil','69190-000','PIN'),
 (4,'-','Lago Sul','DF','Brasilia','Brasil','71608-900','BSB'),
 (5,'Arligton','VA 22202','WA','Seattle','Estados Unidos','-','BFI');
/*!40000 ALTER TABLE `aeroporto` ENABLE KEYS */;


--
-- Table structure for table `azulviagens`.`aviao`
--

DROP TABLE IF EXISTS `aviao`;
CREATE TABLE `aviao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vagas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `azulviagens`.`aviao`
--

/*!40000 ALTER TABLE `aviao` DISABLE KEYS */;
INSERT INTO `aviao` (`id`,`vagas`) VALUES 
 (1,40),
 (2,40),
 (3,40),
 (4,40),
 (5,40),
 (6,40),
 (7,40);
/*!40000 ALTER TABLE `aviao` ENABLE KEYS */;


--
-- Table structure for table `azulviagens`.`cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(15) COLLATE utf8_bin NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `azulviagens`.`cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`codigo`,`nome`,`cpf`,`data_nascimento`,`email`,`senha`) VALUES 
 (1,'italo','123','0000-00-00','1','1'),
 (2,'italo','123','0000-00-00','1','1'),
 (3,'italo','123','0000-00-00','1','1'),
 (4,'italo','123','0000-00-00','1','1'),
 (5,'italo','123','1993-06-19','1','1'),
 (6,'albert','123','1993-06-19','1','1'),
 (7,'Italo Amadeus','00000000085','1998-05-26','italuamadeus.12@gmail.com','123456789'),
 (8,'Andreina Sabrina','88877766655','2020-06-17','andreina@gmail.com','123456123'),
 (9,'Andreina Sabrina','88877766655','2020-06-17','andreina@gmail.com','123456123'),
 (10,' ','','0000-00-00','',''),
 (11,'Italo Amadeus','88877766655','0000-00-00','italuamadeus.12@gmail.com','12345678'),
 (12,'Italo Amadeus','88877766655','2020-06-02','italuamadeus.12@gmail.com','aaaaaaaaaaaaaaaaaaaa'),
 (13,'Antonio LenÃ§Ãµis','12345678945','2020-06-10','antonio@lencois.com','antonio123'),
 (14,'Andreina Amadeus','88877766655','2020-06-24','vinicius.eni.martins@hotmail.com','14124132gdfg gsfg'),
 (15,'Italo Amadeus','03319315242','1998-05-26','italuamadeus.12@gmail.com','sarahvinicius');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Table structure for table `azulviagens`.`passagem`
--

DROP TABLE IF EXISTS `passagem`;
CREATE TABLE `passagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_voo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_voo` (`id_voo`),
  CONSTRAINT `passagem_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`codigo`),
  CONSTRAINT `passagem_ibfk_2` FOREIGN KEY (`id_voo`) REFERENCES `voo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `azulviagens`.`passagem`
--

/*!40000 ALTER TABLE `passagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `passagem` ENABLE KEYS */;


--
-- Table structure for table `azulviagens`.`voo`
--

DROP TABLE IF EXISTS `voo`;
CREATE TABLE `voo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horario_partida` time NOT NULL,
  `horario_chegada` time NOT NULL,
  `data_partida` date NOT NULL,
  `data_chegada` date NOT NULL,
  `id_origem` int(11) NOT NULL,
  `id_destino` int(11) NOT NULL,
  `id_aviao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_origem` (`id_origem`),
  KEY `id_destino` (`id_destino`),
  KEY `id_aviao` (`id_aviao`),
  CONSTRAINT `voo_ibfk_1` FOREIGN KEY (`id_origem`) REFERENCES `aeroporto` (`id`),
  CONSTRAINT `voo_ibfk_2` FOREIGN KEY (`id_destino`) REFERENCES `aeroporto` (`id`),
  CONSTRAINT `voo_ibfk_3` FOREIGN KEY (`id_aviao`) REFERENCES `aviao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `azulviagens`.`voo`
--

/*!40000 ALTER TABLE `voo` DISABLE KEYS */;
INSERT INTO `voo` (`id`,`horario_partida`,`horario_chegada`,`data_partida`,`data_chegada`,`id_origem`,`id_destino`,`id_aviao`) VALUES 
 (1,'11:30:00','13:30:00','2020-05-01','2020-05-02',1,2,1),
 (2,'06:45:00','09:30:00','2020-06-01','2020-06-02',1,2,2),
 (3,'07:45:00','10:30:00','2020-06-01','2020-06-02',2,1,3),
 (4,'22:00:00','00:00:00','2020-06-02','2020-06-03',2,3,4),
 (5,'20:10:00','23:20:00','2020-06-03','2020-06-03',3,5,5);
/*!40000 ALTER TABLE `voo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
