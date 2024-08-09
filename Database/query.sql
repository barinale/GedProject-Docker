CREATE DATABASE GedDatabase;

USE GedDatabase;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE file (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(255)
);
ALTER TABLE file ADD COLUMN name VARCHAR(255);


CREATE TABLE email (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_id INT,
    email_description TEXT,
    email_sender VARCHAR(255),
    date_sent DATE,
    FOREIGN KEY (file_id) REFERENCES file(id)
);

CREATE TABLE factory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_id INT,
    company VARCHAR(255),
    amount DECIMAL(10, 2),
    FOREIGN KEY (file_id) REFERENCES file(id)
);

CREATE TABLE command (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_id INT,
    command_description TEXT,
    total_amount DECIMAL(10, 2),
    FOREIGN KEY (file_id) REFERENCES file(id)
);

CREATE TABLE estimate (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_id INT,
    estimate_description TEXT,
    total_amount DECIMAL(10, 2),
    FOREIGN KEY (file_id) REFERENCES file(id)
);
