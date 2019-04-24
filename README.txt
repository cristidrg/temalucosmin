1) Din terminal dai:
npm install

2) Apoi iti instalezi mysql si dai drumu la server si bagi comenzile:

CREATE DATABASE carbook_db;

USE carbook_db;

CREATE TABLE IF NOT EXISTS `users` (
`uid` int(11) NOT NULL AUTO_INCREMENT,
`user` varchar(255) DEFAULT NULL,
`pass` varchar(100) DEFAULT NULL,
PRIMARY KEY (`uid`),
UNIQUE KEY `username` (`user`)
);

INSERT INTO `users` (`uid`, `user`, `pass`) VALUES (1, 'admin', 'test');

3) Apoi rulezi php -S localhost:8000 