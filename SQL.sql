CREATE TABLE `user_info`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(255) NOT NULL,
    `dob` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);