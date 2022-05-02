DROP TABLE IF EXISTS `standings`;

CREATE TABLE `standings` (
  `position` varchar(11) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `car` varchar(255) NOT NULL,
  `points` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `standings` (`position`, `driver`, `nationality`, `car`, `points`) VALUES
('1', 'Charles Leclerc','FERRARI','Monaco','86'),
('2', 'Max Verstappen','RED BULL RACING HONDA','Netherlands','59'),
('3', 'Sergio Perez','RED BULL RACING HONDA','Mexico','54'),
('4', 'George Russell', 'MERCEDES','Great Britain','49'),
('5', 'Carlos Sainz','FERRARI','Spain','38'),
('6', 'Lando Norris','MCLAREN MERCEDES','Great Britain','35'),
('7', 'Lewis Hamilton','MERCEDES','Great Britain','28'),
('8', 'Valtteri Bottas','MERCEDES','Finland','24'),
('9', 'Esteban Ocon','APINE RENAULT','France','20'),
('10', 'Kevin Magnussen','HAAS FERRARI','Denmark','15');