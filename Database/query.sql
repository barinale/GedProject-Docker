-- PostgreSQL does not need to explicitly create a database in the script if running in a container
-- CREATE DATABASE GedDatabase; 
-- USE GedDatabase; -- PostgreSQL connects directly to a database without needing this

-- Create the 'users' table
CREATE TABLE users (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Create the 'file' table
CREATE TABLE file (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    path VARCHAR(255)
);

-- Add a new column 'name' to the 'file' table
ALTER TABLE file ADD COLUMN name VARCHAR(255);

-- Create the 'email' table
CREATE TABLE email (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    file_id INTEGER,  -- Use INTEGER for foreign key references
    email_description TEXT,
    email_sender VARCHAR(255),
    date_sent DATE,
    FOREIGN KEY (file_id) REFERENCES file(id)
);

-- Create the 'factory' table
CREATE TABLE factory (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    file_id INTEGER,  -- Use INTEGER for foreign key references
    company VARCHAR(255),
    amount NUMERIC(10, 2),  -- Use NUMERIC for decimal values
    FOREIGN KEY (file_id) REFERENCES file(id)
);

-- Create the 'command' table
CREATE TABLE command (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    file_id INTEGER,  -- Use INTEGER for foreign key references
    command_description TEXT,
    total_amount NUMERIC(10, 2),  -- Use NUMERIC for decimal values
    FOREIGN KEY (file_id) REFERENCES file(id)
);

-- Create the 'estimate' table
CREATE TABLE estimate (
    id SERIAL PRIMARY KEY,  -- Use SERIAL for auto-incrementing integer
    file_id INTEGER,  -- Use INTEGER for foreign key references
    estimate_description TEXT,
    total_amount NUMERIC(10, 2),  -- Use NUMERIC for decimal values
    FOREIGN KEY (file_id) REFERENCES file(id)
);
