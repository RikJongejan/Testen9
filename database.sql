CREATE DATABASE IF NOT EXISTS klantonderhoudssysteem;
USE klantonderhoudssysteem;

CREATE TABLE accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL
);
