DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enderenço` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNascimento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoCivil` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cliente` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `consumoreservaproduto`;
CREATE TABLE `consumoreservaproduto` (
  `idConsumoReservaProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idReserva` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valorUnitario` double DEFAULT NULL,
  `valorPago` double DEFAULT NULL,
  PRIMARY KEY (`idConsumoReservaProduto`),
  KEY `idReserva` (`idReserva`),
  KEY `idProduto` (`idProduto`),
  CONSTRAINT `consumoreservaproduto_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `reserva` (`idReserva`),
  CONSTRAINT `consumoreservaproduto_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `consumoreservaproduto` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `consumoreservaservico`;
CREATE TABLE `consumoreservaservico` (
  `idConsumoReservaServico` int(11) NOT NULL AUTO_INCREMENT,
  `idReserva` int(11) NOT NULL,
  `idServiço` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valorUnitario` int(11) DEFAULT NULL,
  `valorPago` int(11) DEFAULT NULL,
  PRIMARY KEY (`idConsumoReservaServico`),
  KEY `idReserva` (`idReserva`),
  KEY `idServiço` (`idServiço`),
  CONSTRAINT `consumoreservaservico_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `reserva` (`idReserva`),
  CONSTRAINT `consumoreservaservico_ibfk_2` FOREIGN KEY (`idServiço`) REFERENCES `serviço` (`idServiço`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `consumoreservaservico` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `login` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoProduto` int(11) NOT NULL,
  `descProduto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorProduto` double NOT NULL,
  `quatindade` double NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `produto` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `quarto`;

CREATE TABLE `quarto` (
  `idQuarto` int(11) NOT NULL AUTO_INCREMENT,
  `tipoQuarto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorSimples` double DEFAULT NULL,
  `valorDuplo` double DEFAULT NULL,
  `valorTriplo` double DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idQuarto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `quarto` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idQuarto` int(11) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date NOT NULL,
  `valorDiario` double NOT NULL,
  `tipoQuartoSelecionado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `valorReserva` double NOT NULL,
  `valorPagoReserva` double NOT NULL,
  `satisfação` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `idcliente` (`idcliente`),
  KEY `idQuarto` (`idQuarto`),
  CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idQuarto`) REFERENCES `quarto` (`idQuarto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `reserva` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `serviço`;

CREATE TABLE `serviço` (
  `idServiço` int(11) NOT NULL AUTO_INCREMENT,
  `descServiço` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idServiço`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `serviço` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL AUTO_INCREMENT,
  `descServico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `servico` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `tipoproduto`;
CREATE TABLE `tipoproduto` (
  `idTipoProduto` int(11) NOT NULL AUTO_INCREMENT,
  `descProduto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idTipoProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tipoproduto` WRITE;

UNLOCK TABLES;