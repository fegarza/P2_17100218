/*mysql*/

CREATE DATABASE bonbon;

USE bonbon;

CREATE TABLE `usuarios` (
  `UsuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `Alias` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  PRIMARY KEY (`UsuarioID`)
)


/*
INSERT INTO `usuarios` (`Alias`, `Nombre`, `Email`, `Clave`) VALUES
('arvafik', 'Jessica Grajeda', 'demiseg@outlook.com', 'QwErTy123'),
('fegarza', 'Felipe Garza', 'xd@xd.com', 'QwErTy123');
*/