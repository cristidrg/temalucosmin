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


Linkuri cu tutoriale:


Tutorial PHP incepatori:
https://laracasts.com/series/php-for-beginners - contu si parola le ai pe mess

De la asta am luat cum sa faci un register si login:
https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database

Vezi ca momentan login-ul si registerul nu arata daca sunt erori in system, gen register cu acelasi username sau login cu parola gresita.
