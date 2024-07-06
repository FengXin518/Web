SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `user_info` (
    `user_id` int(11) AUTO_INCREMENT NOT NULL,
    `firstname` tinytext NOT NULL,
    `lastname` tinytext NOT NULL,
    `role` ENUM('administrator','casual') NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255),
    PRIMARY KEY (user_id, email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_info` (`firstname`, `lastname`, `role`, `email`, `password`) 
VALUES ('Feng', 'Xin', 'administrator', '123456789@163.com', '$2y$10$3VvNdHZyIKfsDJ2mEXZNO.E2xkFHAA6wiLLoy7aAYkjQp5ebpueV.');