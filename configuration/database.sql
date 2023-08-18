-- Create the "transfer" database
CREATE DATABASE IF NOT EXISTS transfer;

-- Switch to the "transfer" database
USE transfer;

-- Create the "bank" table
CREATE TABLE IF NOT EXISTS bank (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    sendername VARCHAR(100),
    amount INT(100),
    receivername VARCHAR(100),
    accountnumber INT(40),
    bank VARCHAR(100),
    status VARCHAR(50),
    date DATE,
    time TIME,
    naration VARCHAR(100),
    transferid INT(50)
);

-- Create the "login" table
CREATE TABLE IF NOT EXISTS login (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    -- bank_id INT(10),
    -- FOREIGN KEY (bank_id) REFERENCES bank(id)
);
