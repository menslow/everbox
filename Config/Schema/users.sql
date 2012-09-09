DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20),
    email VARCHAR(100),
    dropbox_token VARCHAR(50),
    dropbox_token_secret VARCHAR(50),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);