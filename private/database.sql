SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

CREATE DATABASE IF NOT EXISTS `database_name`
    DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

USE `database_name`;

-- Drop child first, then parent --
DROP TABLE IF EXISTS `TABLE_NAME`;

CREATE TABLE `TABLE_NAME` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_table_name_title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- SEED --
INSERT INTO `TABLE_NAME` (`id`, `title`) VALUES
    (1, 'title_1'),
    (2, 'title_2'),
    (3, 'title_3');

SET FOREIGN_KEY_CHECKS = 1;